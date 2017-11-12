<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagrama;

class DiagramController extends Controller
{

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// saber si se esta editando o no; se van a duplicar los rows cada guardado
		$diagrama = new Diagrama;
		$diagrama->nombre = $request->nombre;
		$diagrama->diagrama = $request->diagrama;
		$diagrama->status = 0;
		// tipo 0 por los momentos
		// $diagrama->tipo = 0;
		$diagrama->save();
		return 'ok';
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}


	public function generate($diagrama=''){

		// $diag->root->mxCell todas las celdas de las tablas
		// parent 1 y sin source ni target son tablas
		// parent 1 con surce y targey conexiones flechas puede ser, si no tiene no agregar
		// 
		// para saber a que celda pertenece a que tabla, tienen parent = al id de la tabla.
		// falta probar con las flechas y con otras esructuras

		$tablas = [];
		$celdas = [];
		$conexiones = [];
		// errores?
		$errores = false;


		$diagrama = Diagrama::find(12);

		$diag =simplexml_load_string($diagrama->diagrama);

		foreach ($diag->root->mxCell as $key => $value) {

			if ((int) $value->attributes()->parent==1) {
			// tabla o union
				if ((int) $value->attributes()->source >0 && (int) $value->attributes()->target > 0) {
				// union
					if (empty($conexiones)) {

						$conexiones = [[
							'id' => (int) $value->attributes()->id,
							'desde'=> (string) $value->attributes()->source,
							'hasta'=> (string) $value->attributes()->target
							]
						];
					}else{
						array_push($conexiones,[
							'id' => (int) $value->attributes()->id,
							'desde'=> (string) $value->attributes()->source,
							'hasta'=> (string) $value->attributes()->target
						]);
					}
				}else {
				// tabla
					$tablas[] = ['id' => (int) $value->attributes()->id,'nombre'=> (string) $value->attributes()->value];
				}
			}else if ((int)$value->attributes()->parent !=1 && (int) $value->attributes()->parent > 0){
				// es una celda no tabla
				if (empty($celdas[(int)$value->attributes()->parent])) {

					if (empty($celdas)){

						$celdas[(int)$value->attributes()->parent] = [(int) $value->attributes()->id =>[
									'id' => (int) $value->attributes()->id,
									'nombre'=> (string) $value->attributes()->value,
									'padre' => (int)$value->attributes()->parent
									]
								];

					}else {

						foreach ($celdas as $key_ => $celda) {

							foreach ($celda as $k => $adentro) {
								if ((int)$value->attributes()->parent == $k ) {
										$celdita = $key_;
								}
							}
						}
						if (isset($celdita)) {

							if ((string)$value->attributes()->value!= '') {

								array_push($celdas[$celdita][(int)$value->attributes()->parent],[
									'id' => (int) $value->attributes()->id,
									'nombre'=> (string) $value->attributes()->value,
									'padre' => (int)$value->attributes()->parent
								]);
							}
							unset($celdita);
						}else{
							if ((string)$value->attributes()->value!= '') {
							$celdas[(int)$value->attributes()->parent] = [(int) $value->attributes()->id =>[
										'id' => (int) $value->attributes()->id,
										'nombre'=> (string) $value->attributes()->value,
										'padre' => (int)$value->attributes()->parent
										]
									];
							}
						}
					}

				}else{
					if ((string)$value->attributes()->value!= '') {
						$celdas[(int)$value->attributes()->parent][(int) $value->attributes()->id] = [
							'id' => (int) $value->attributes()->id,
							'nombre'=> (string) $value->attributes()->value,
							'padre' => (int)$value->attributes()->parent
						];
					}
				}
			}
		}
		
		$this->tablas = $tablas;
		$this->celdas = $celdas;
		$this->conexiones = $conexiones;
		$this->nombre = $diagrama->nombre;

		// cambiar status por tipo, estatus por ahora mientras se hace el refresh OJOJOJO
		if ($diagrama->status==0) {
			// CAMBIAR EL STATUS
			return true;
		}else{
			return false;
		}
	}
	public function EntidadRelacion(){

		$string ='';

// CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )
// dd($this->celdas);
		foreach ($this->tablas as $key => $tabla) {

			$string .= "CREATE TABLE ".str_slug($tabla['nombre'],'_'). " (\r\n\t\n";

			foreach ($this->celdas as $index => $celda) {

				if ($tabla['id'] == $index) {

					foreach ($celda as $ind => $celditas) {

							$string.= str_slug($celditas['nombre'], '_');

							if (isset($celditas[0])) {

								$string.= ' '.$this->Traduct($celditas[0]['nombre'],$celditas['nombre']);
							}else{
								$string.= ' VARCHAR(10)';
							}
							
						if ($celditas !== end($celda)){
							$string.= ",\r\n\t\n";
						}
					}
				}
			}

			$string.= ",\r\n\t\nPRIMARY KEY(".$this->primary.")\r\n";
			$string.= ") ENGINE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;\r\n\r\n";
			$this->primary = '';
		}

//conexiones

// ALTER TABLE Orders
// ADD FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);

$cnx = [];
$conxErr = false;
$aux = '';
	foreach ($this->conexiones as $cxindex => $conexiones) {
		foreach ($this->celdas as $idtabla => $c) {
			foreach ($c as $k => $celdita) {
				
				if ($conexiones['desde'] == $k) {

					if (isset($celdita[0])){
						$tipo = $this->Traduct($celdita[0]['nombre'],$celdita['nombre']);
						if (str_contains($this->primary,$celdita['nombre'])) {

							$aux = strtoupper(trim(str_before($tipo,'(')));
							$cnx[$cxindex]['desde'] = ['idtabla' => $idtabla, 'nombre' => $celdita['nombre']];

						}else{
							$this->error = true; $conxErr = true;
							$errores = 'Los campos tienen que ser PRIMARY KEY';
							break 3;

						}
					}else{

						$this->error = true; $conxErr = true;
						$errores = 'Los campos tienen que ser PRIMARY KEY';
						break 3;
					}
				}
				if ($conexiones['hasta'] == $k) {

					if (isset($celdita[0])){
						$tipo = $this->Traduct($celdita[0]['nombre'],$celdita['nombre']);
						if (str_contains($this->primary,$celdita['nombre'])) {
						
							if ($aux == strtoupper(trim(str_before($tipo,'(')))) {

								$cnx[$cxindex]['hasta'] = ['idtabla' => $idtabla, 'nombre' => $celdita['nombre']];
							}else{

								$this->error = true; $conxErr = true;
								$errores = 'Los campos no coinciden en el tipo de datos ver: https://docs.microsoft.com/es-es/sql/t-sql/data-types/data-types-transact-sql';
								break 3;
							}
						}else{
							$this->error = true; $conxErr = true;
							$errores = 'Los campos tienen que ser PRIMARY KEY';
							break 3;
						}
					}else{
						$this->error = true; $conxErr = true;
						$errores = 'Los campos tienen que ser PRIMARY KEY';
						break 3;
					}
				}
			}
		}					
	}
unset($aux);

// ponerle todas las mariqueras que le pone antes al sql 
// no crees la relacion y ya :D si no cumple con esas condiciones
// retornar errores, si se puede

	if (!$conxErr) {
		foreach ($cnx as $cx => $conex) {
			$string .= "ALTER TABLE ";
			foreach ($this->tablas as $key => $tabla) {
				if ($conex['desde']['idtabla'] == $tabla['id'] ) {
					$string .= str_slug($tabla['nombre'],'_')."\r\nADD FOREIGN KEY (".str_slug($conex['desde']['nombre'], '_').") ";
				}
				else if ($conex['hasta']['idtabla'] == $tabla['id'] ) {
					$string .=  "REFERENCES ".str_slug($tabla['nombre'],'_')."(".str_slug($conex['desde']['nombre'], '_').");\r\n\r\n";
				}
			}
		}
		$string.= "\r\n\r\n";
	}else{
		$this->erroresLog .= $errores;
	}
	unset($cnx);
// fin de conexiones

	$filename = substr($this->nombre,0,strpos($this->nombre,'.')-1).'.sql';
	if (!$this->error) {

		$f = fopen($filename,'w+');
		fwrite($f,$string);
		fclose($f);
	}
		
		return $filename;
	}

	public function Traduct($tipo,$cellname){

		$tipo = strtoupper($tipo);
		$var='';

		if (str_contains($tipo, 'INT')) {

			$aux =  str_before(str_after(substr($tipo,strpos($tipo, 'INT')), '('), ')');

			if (is_numeric($aux)) {
				$var.= 'INT('.$aux.')';
			}else{
				$var = 'INT(190)';
			}

		}else{
			$var = 'VARCHAR(190)';
		}


// ya funciona se pueden agregar mas cosas como str

		if(str_contains($tipo, 'PK') ){

			if ($this->primary=='') {
				$this->primary = str_slug($cellname);
			}else{
				$this->primary .= ','.str_slug($cellname);
			}

			$var.=' UNIQUE';
		
		}else if(str_contains($tipo, 'AI')){

			$var = 'INT(6) AUTO_INCREMENT';

			if ($this->primary=='') {
				$this->primary = str_slug($cellname);
			}else{
				$this->primary .= ','.str_slug($cellname);
			}

		}

		return is_string($var) ? $var: false;

	}
	public function DiagramaClases(){


	}
	function Laucher() {

      if ($this->generate()) {

      	$f = $this->EntidadRelacion();
      }else{

      	$f = $this->DiagramaClases();
      }

    return $this->error ? $this->erroresLog : response()->download($f)->deleteFileAfterSend(true);
  }

  function __construct(){

  	$this->erroresLog ='';
		$this->error = false;
		$this->primary ='';
  }
}
