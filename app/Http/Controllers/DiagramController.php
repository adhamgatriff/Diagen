<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagrama;
use App\UsuarioDiagrama;
use App\Usuario;
use Auth;


class DiagramController extends Controller
{

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */

	private function trimString($string){

		return str_replace('%C2%A0','',urlencode(str_replace(' ','',$string )));
	}

	public function delDiagrama(Request $req){

		UsuarioDiagrama::where('id_diagrama',$req->id)->delete();
		Diagrama::find($req->id)->delete();
		return 'ok'; 
	}

	public function store(Request $request)
	{

		// if ($request->acc=='new') {
			// dd($request->userid);
		// dd(Diagrama::where('nombre',$request->nombre)->select('id')->first());
// dd(UsuarioDiagrama::where(['id_diagrama',$request->id_diagrama])->count());

			$diagrama = new Diagrama;
			$diagrama->nombre = $request->nombre;
			$diagrama->diagrama = $request->diagrama;
			$diagrama->status = 0;
			$diagrama->tipo = $request->tipo;
			$diagrama->save();

			$dU = new UsuarioDiagrama;
			$dU->id_diagrama = $diagrama->id;
			$dU->id_usuario = $request->userid;
			$dU->save();

			$filename = Auth::user()->id.$diagrama->id.'.xml';
			$f = fopen(public_path().'/diagramasXml/'.$filename,'w+');
			fwrite($f,$request->xml);
			fclose($f);

			dd(app('App\Http\Controllers\Diagrama2Img')->Convertir($filename));

		// }else if($request->acc == 'edit'){

		// dd(UsuarioDiagrama::find($request->id_diagrama)->count());



		// 	$eud = UsuarioDiagrama::find($request->id_diagrama)->select('id_diagrama');
		// 	$eud->nombre = $request->nombre;
		// 	$eud->diagrama = $request->diagrama;
		// 	$eud->status = 0;
		// 	$eud->tipo = $request->tipo;
		// 	$eud->save();

		// }
		
		return 'ok';
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(){
		
		return view('editor.editor');
		
	}

	public function generate($id_diag='',$dxml= '', $nam_='',$t=''){

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

		if ($dxml!='') {
			$diag =simplexml_load_string($dxml);
			$this->nombre = $nam_;
			$tipo = $t;
		}else{
			$diagrama = Diagrama::find($id_diag);
			$diag = simplexml_load_string($diagrama->diagrama);
			$this->nombre = $diagrama->nombre;
			$tipo = $diagrama->tipo;
		}

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
					if (!str_contains((string) $value->attributes()->style,'shape')) {
						$tablas[] = ['id' => (int) $value->attributes()->id,'nombre'=> (string) $value->attributes()->value];
					}
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
		

		// cambiar status por tipo, estatus por ahora mientras se hace el refresh OJOJOJO
		if ($tipo ==0 ) {
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
			if ($this->primary != '') {
				$string.= ",\r\n\t\nPRIMARY KEY(".$this->primary.")";
			}
			$string.= "\r\n) ENGINE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;\r\n\r\n";
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
						$tipo = $this->Traduct($celdita[0]['nombre'],str_slug($celdita['nombre'], '_'));

						if (str_contains($this->primary,str_slug($celdita['nombre'], '_'))) {
							$aux = strtoupper(trim(str_before($tipo,'(')));
							$cnx[$cxindex]['desde'] = ['idtabla' => $idtabla, 'nombre' => $celdita['nombre']];

						}else{
							$this->error = true; $conxErr = true;
							$errores = 'Los campos tienen que ser PRIMARY KEY <a href="https://www.w3schools.com/sql/sql_primarykey.asp" target="_blank"><strong>(Mas informacion)</strong></a>';
							break 3;

						}
					}else{

						$this->error = true; $conxErr = true;
						$errores = 'Los campos tienen que ser PRIMARY KEY<a href="https://www.w3schools.com/sql/sql_primarykey.asp" target="_blank"><strong>(Mas informacion)</strong></a>';
						break 3;
					}
				}
				if ($conexiones['hasta'] == $k) {

					if (isset($celdita[0])){
						$tipo = $this->Traduct($celdita[0]['nombre'],str_slug($celdita['nombre'], '_'));

						if (str_contains($this->primary,str_slug($celdita['nombre'], '_'))) {
										
							if ($aux == strtoupper(trim(str_before($tipo,'(')))) {

								$cnx[$cxindex]['hasta'] = ['idtabla' => $idtabla, 'nombre' => $celdita['nombre']];
							}else{
								dd($conexiones);
								$this->error = true; $conxErr = true;
								$errores = 'Los campos no coinciden en el tipo de datos <a href="https://docs.microsoft.com/es-es/sql/t-sql/data-types/data-types-transact-sql" target="_blank"><strong>(Mas informacion)</strong></a>
								 ';
								break 3;
							}
						}else{
							$this->error = true; $conxErr = true;
							$errores = 'Los campos tienen que ser PRIMARY KEY <a href="https://www.w3schools.com/sql/sql_primarykey.asp" target="_blank"><strong>(Mas informacion)</strong></a>';
							break 3;
						}
					}else{
						$this->error = true; $conxErr = true;
						$errores = 'Los campos tienen que ser PRIMARY KEY <a href="https://www.w3schools.com/sql/sql_primarykey.asp" target="_blank"><strong>(Mas informacion)</strong></a>';
						break 3;
					}
				}
			}
		}					
	}
unset($aux);

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
		// tipo de dato numerico
		if (str_contains($tipo, 'INT') || str_contains($tipo, 'IN')) {

			$aux =  str_before(str_after(substr($tipo,strpos($tipo, 'INT')), '('), ')');

			if (is_numeric($aux)) {
				$var= 'INT('.$aux.')';
			}else{
				$var = 'INT(10)';
			}

		}else if (str_contains($tipo, 'SMALLINT')|| str_contains($tipo, 'SINT')) {

			$aux =  str_before(str_after(substr($tipo,strpos($tipo, 'SMALLINT')), '('), ')');

			if (is_numeric($aux)) {
				$var= 'SMALLINT('.$aux.')';
			}else{
				$var = 'SMALLINT(10)';
			}

		}else if (str_contains($tipo, 'TINYINT')|| str_contains($tipo, 'TINT')) {

			$aux =  str_before(str_after(substr($tipo,strpos($tipo, 'TINYINT')), '('), ')');

			if (is_numeric($aux)) {
				$var= 'TINYINT('.$aux.')';
			}else{
				$var = 'TINYINT(10)';
			}

		}else if (str_contains($tipo, 'MEDIUMINT')|| str_contains($tipo, 'MINT')) {

			$aux =  str_before(str_after(substr($tipo,strpos($tipo, 'MEDIUMINT')), '('), ')');

			if (is_numeric($aux)) {
				$var= 'MEDIUMINT('.$aux.')';
			}else{
				$var = 'MEDIUMINT(10)';
			}

		}else if (str_contains($tipo, 'BIGINT')|| str_contains($tipo, 'BINT')) {

			$aux =  str_before(str_after(substr($tipo,strpos($tipo, 'BIGINT')), '('), ')');

			if (is_numeric($aux)) {
				$var= 'BIGINT('.$aux.')';
			}else{
				$var = 'BIGINT(10)';
			}

		}else if (str_contains($tipo, 'DECIMAL')|| str_contains($tipo, 'DEC')) {

			$aux =  str_before(str_after(substr($tipo,strpos($tipo, 'DECIMAL')), '('), ')');

			if (is_numeric($aux)) {
				$var= 'DECIMAL('.$aux.')';
			}else{
				$var = 'DECIMAL(10)';
			}

		}else if (str_contains($tipo, 'FLOAT')|| str_contains($tipo, 'FT')) {

			$aux =  str_before(str_after(substr($tipo,strpos($tipo, 'FLOAT')), '('), ')');

			if (is_numeric($aux)) {
				$var= 'FLOAT('.$aux.')';
			}else{
				$var = 'FLOAT(10)';
			}

		}else if (str_contains($tipo, 'DOUBLE')|| str_contains($tipo, 'DBL')) {

			$var = 'DOUBLE';

		}else if (str_contains($tipo, 'BIT')|| str_contains($tipo, 'BT')) {

			$var = 'BIT';

		}else if (ends_with($tipo, 'DATE')|| str_contains($tipo, 'DT')) {

			$var = 'DATE';
			// tipo de datos fecha
		}else if (ends_with($tipo, 'DATETIME')|| str_contains($tipo, 'DTT')) {

			$var = 'DATETIME';

		}else if (ends_with($tipo, 'TIME')|| str_contains($tipo, 'TM')) {

			$var = 'TIME';

		}else if (ends_with($tipo, 'TIMESTAMP')|| str_contains($tipo, 'TMS')) {

			$var = 'TIMESTAMP';

		}else if (str_contains($tipo, 'YEAR')|| str_contains($tipo, 'YR')) {

			$var = 'YEAR';

		// tipo de datos string
		}else if (str_contains($tipo, 'CHAR') || str_contains($tipo, 'CHR')) {

			$aux =  str_before(str_after(substr($tipo,strpos($tipo, 'CHAR')), '('), ')');

			if (is_numeric($aux)) {
				$var= 'CHAR('.$aux.')';
			}else{
				$var = 'CHAR(150)';
			}

		}else if (str_contains($tipo, 'VARCHAR') || str_contains($tipo, 'VRCH') || str_contains($tipo, 'STR')) {

			$aux =  str_before(str_after(substr($tipo,strpos($tipo, 'VARCHAR')), '('), ')');

			if (is_numeric($aux)) {
				$var= 'VARCHAR('.$aux.')';
			}else{
				$var = 'VARCHAR(150)';
			}

		}else if (str_contains($tipo, 'TINYBLOB')|| str_contains($tipo, 'TB')) {

			$var = 'TINYBLOB';

		}else if (str_contains($tipo, 'BLOB')|| str_contains($tipo, 'BB')) {

			$var = 'BLOB';

		}else if (str_contains($tipo, 'MEDIUMBLOB')|| str_contains($tipo, 'MB')) {

			$var = 'MEDIUMBLOB';

		}else if (str_contains($tipo, 'LONGBLOB')|| str_contains($tipo, 'LB')) {

			$var = 'LONGBLOB';

		}else if (str_contains($tipo, 'TEXT')|| str_contains($tipo, 'TXT')) {

			$noPrimary= true;
			$var = 'TEXT';

		}else if (str_contains($tipo, 'MEDIUMTEXT')|| str_contains($tipo, 'MTXT')) {

			$var = 'MEDIUMTEXT';

		}else if (str_contains($tipo, 'LONGTEXT')|| str_contains($tipo, 'LTXT')) {

			$var = 'LONGTEXT';
			
		}else{
			$var = 'VARCHAR(190)';
		}


		if(str_contains($tipo, 'PK') || str_contains($tipo, 'PRIMARY KEY') ){

			if (!isset($noPrimary)) {

				if ($this->primary=='') {
					$this->primary = $this->trimString(str_slug($cellname, '_'));
				}else{
					$this->primary .= ','.$this->trimString(str_slug($cellname, '_'));
				}

				$var.=' UNIQUE';
			}else{
				$this->error = true;
				$this->erroresLog = 'este tipo de datos no puede ser primario';
			}		
		
		}else if(str_contains($tipo, 'AI') || str_contains($tipo, 'AUTO_INCREMENT')){

			$var = 'INT(6) AUTO_INCREMENT UNIQUE';

			if ($this->primary=='') {
				$this->primary = $this->trimString(str_slug($cellname, '_'));
			}else{
				$this->primary .= ','.$this->trimString(str_slug($cellname, '_'));
			}

		}else if(str_contains($tipo, 'NN') || str_contains($tipo, 'NOT NULL')){

			$var.= 'NOT NULL';

		}else if(str_contains($tipo, 'UQ') || str_contains($tipo, 'UNIQUE')){

			$var.= 'UNIQUE';
			
		}

		return is_string($var) ? $var: false;

	}
	public function DiagramaClases(){


	}
	function Laucher(Request $req) {

	// diag_c diagrama xml
	// id_diag diagrama para buscarlo
		
		if(isset($req->diag_c)) {
			$dxml = urldecode($req->diag_c);
			$name= urldecode($req->name);
			$t = $req->t;
		}else{
			$dxml='';$name='';$t='';
		}

    if ($this->generate($req->id_diag,$dxml,$name,$t)) {

    	$f = $this->EntidadRelacion();
    }else{

    	$f = $this->DiagramaClases();
    }

    if ($this->error ) {
    	return view('error')->with(['erroresLog' => $this->erroresLog]);
    }else{
    	$d = Diagrama::find($req->id_diag);
    	// if($d->status==1){$d->delete();}
    	return response()->download($f)->deleteFileAfterSend(true);
    }	
  }

  function __construct(){

  	$this->erroresLog ='';
		$this->error = false;
		$this->primary ='';
  }
}
