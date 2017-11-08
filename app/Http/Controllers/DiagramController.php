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
		$diagrama->tipo = 0;
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
		// parent 1 con surce y targey conecciones flechas puede ser, si no tiene no agregar
		// 
		// para saber a que celda pertenece a que tabla, tienen parent = al id de la tabla.
		// falta probar con las flechas y con otras esructuras

		$tablas = [];
		$celdas = [];
		$conexiones = [];

		$diagrama = Diagrama::find(2);

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
		$filename = substr($this->nombre,0,strpos($this->nombre,'.')-1).'.sql';
		$f = fopen($filename,'w+');


// CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )

		// puedes hacerlo por parte y luego hacer un altertable me parece lo mejor
		foreach ($this->tablas as $key => $tabla) {

			$string .= "CREATE TABLE ".$tabla['nombre']. " (";

			foreach ($this->celdas as $index => $celda) {

				if ($tabla['id'] == $index) {

					foreach ($celda as $ind => $celditas) {

							$string.= str_slug($celditas['nombre'], '_');

							if (isset($celditas[0])) {

								$string.= ' '.$this->Traduct($celditas[0]['nombre']);
							}else{
								$string.= ' VARCHAR(10)';
							}
							
						if ($celditas !== end($celda)){
							$string.= ",\r\n\t\n";
						}
					}
				}
			}

			$string.= ");\r\n\r\n";
		}

		// faltan las conexiones

		fwrite($f,$string);
		fclose($f);

		return $filename;
	}
	public function Traduct($tipo){

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

			$var.=' PRIMARY KEY';
		
		}else if(str_contains($tipo, 'AI')){

			$var = 'INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY';
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
      return response()->download($f)->deleteFileAfterSend(true);
   }

}
