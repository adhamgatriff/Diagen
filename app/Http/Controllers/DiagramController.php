<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagrama;
use App\UsuarioDiagrama;
use App\Usuario;
use Auth;
use App\Traits\DiagClases;
use App\Traits\DiagER;
use Zipper;

class DiagramController extends Controller
{

	use DiagClases,DiagER;

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
		
		unlink('diagramasImg/'.Auth::user()->id.$req->id.'.png');
		UsuarioDiagrama::where('id_diagrama',$req->id)->delete();
		Diagrama::find($req->id)->delete();
		return 'ok'; 
	}

	public function datos(){

		$us = Usuario::count();
		$dt = Diagrama::count();
		$er = Diagrama::where('tipo', 0)->count();
		$cs = Diagrama::where('tipo', 1)->count();

		return response()->json(['us'=> $us,'dt'=>$dt,'dc'=>$cs,'er'=>$er]);
	}

	public function store(Request $request)
	{

		if ($request->acc=='new') {

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

			app('App\Http\Controllers\Diagrama2Img')->Convertir($filename);

			return $diagrama->id;

		}else if($request->acc == 'edit'){

			$eud = Diagrama::find($request->id_diagrama);
			$eud->nombre = $request->nombre;
			$eud->diagrama = $request->diagrama;
			$eud->status = 0;
			$eud->save();

			$filename = Auth::user()->id.$request->id_diagrama.'.xml';
			$f = fopen(public_path().'/diagramasXml/'.$filename,'w+');
			fwrite($f,$request->xml);
			fclose($f);

			app('App\Http\Controllers\Diagrama2Img')->Convertir($filename);
		}
		
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

	public function generate($id_diag=''){

		$tablas = [];
		$celdas = [];
		$conexiones = [];
		// errores?
		$errores = false;
		$diagrama = Diagrama::find($id_diag);
		$diag = simplexml_load_string($diagrama->diagrama);

		// aqui para el nombre de las clases
		$this->nombre = $diagrama->nombre;

		$tipo = $diagrama->tipo;

		foreach ($diag->root->mxCell as $key => $value) {

			if ((int) $value->attributes()->parent==1) {
			// tabla o union
				if ((int) $value->attributes()->source >0 && (int) $value->attributes()->target > 0) {
				// union
					if (empty($conexiones)) {

						$conexiones = [[
							'id' => (int) $value->attributes()->id,
							'desde'=> (string) $value->attributes()->source,
							'hasta'=> (string) $value->attributes()->target,
							'tipo'=> (string) $value->attributes()->tipoconexion
							]
						];
					}else{
						array_push($conexiones,[
							'id' => (int) $value->attributes()->id,
							'desde'=> (string) $value->attributes()->source,
							'hasta'=> (string) $value->attributes()->target,
							'tipo'=> (string) $value->attributes()->tipoconexion
						]);
					}
				}else {
				// tabla
					if (!str_contains((string) $value->attributes()->style,'shape')) {
						$tablas[(int) $value->attributes()->id] = ['id' => (int) $value->attributes()->id,
												'nombre'=> (string) $value->attributes()->value,
												'interfaz' => (int) $value->attributes()->isInterface
											];
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
		
		if ($tipo ==0) {
			// CAMBIAR EL STATUS
			return true;
		}else{
			return false;
		}
	}

	function comprobarNombres(){

		$arra = [];
		$bool = false;

		foreach ($this->tablas as $key => $value) {
			
			if(in_array($value['nombre'],$arra)){
				$bool = true;
				break;
			}else{
				array_push($arra,$value['nombre']);
			}
		}

		return $bool;
	}

	function Laucher(Request $req) {

	// diag_c diagrama xml
	// id_diag diagrama para buscarlo

		if ($this->generate($req->id_diag)) {
			unset($f);
			if(!$this->comprobarNombres()){
				$f = $this->EntidadRelacion();
			}else{
				$this->error=true;
				$this->erroresLog='Hay tablas con nombres iguales';
			}
		}else{
			unset($f);
			if(!$this->comprobarNombres()){
				$f = $this->DiagramaClases($req->lng);
			}else{
				$this->error=true;
				$this->erroresLog='Hay clases con nombres iguales';
			}
		}

		if ($this->error ) {
			return view('error')->with(['erroresLog' => $this->erroresLog]);
		}else{
			$d = Diagrama::find($req->id_diag);

			if($d->status==1){
				$d->delete();
				if ($d->tipo == 0) { //sql
					return response()->download($f)->deleteFileAfterSend(true);
				}else { //class
					$fm = $this->nombre.'.zip';
					Zipper::make('myzip/'.$fm)->add($f)->close();
					array_map("unlink", $f);
					return response()->download(public_path('myzip/'.$fm))->deleteFileAfterSend(true);
				}

			}else{
				if ($d->tipo == 0) {
					return response()->download($f)->deleteFileAfterSend(true);
				}else{
					$fm = $this->nombre.'.zip';
					Zipper::make('myzip/'.$fm)->add($f)->close();
					array_map("unlink", $f);
					return response()->download(public_path('myzip/'.$fm))->deleteFileAfterSend(true);
				}
			}
		}	
	}

	function launcherMultiple(Request $req){
		$fm = $req->name.'.zip';

		if ($req->tipo == 'er') {
			$sql_ = [];
			foreach ($req->diags as $key => $val) {
				$this->generate($val);
				$sql_[$key] = $this->EntidadRelacion();
			}

			Zipper::make('myzip/'.$fm)->add($sql_)->close();
			array_map("unlink", $sql_);
			return response()->download(public_path('myzip/'.$fm))->deleteFileAfterSend(true);

		}else if($req->tipo == 'dc'){
			$dc_ = [];
			foreach ($req->diags as $ke => $va) {
				$this->generate($va);
				$aux = $this->DiagramaClases($req->lng);
				Zipper::make($this->nombre.'.zip')->add($aux)->close();
				$dc_[$ke] = $this->nombre.'.zip';
				array_map("unlink", $aux);
			}
			Zipper::make('myzip/'.$fm)->add($dc_)->close();
			array_map("unlink", $dc_);
			return response()->download(public_path('myzip/'.$fm))->deleteFileAfterSend(true);
		}
	}

	function launcherMultipleTdo(Request $req){

		// dd($req);

		$namesql = $req->namesql.'.zip';
		$nameClass = $req->nameClass.'.zip';

		if (!empty($req->diagSql)) {
			$sql_ = [];
			foreach ($req->diagSql as $key => $val) {
				$this->generate($val);
				$sql_[$key] = $this->EntidadRelacion();
			}

			Zipper::make('myzip/'.$namesql)->add($sql_)->close();
			array_map("unlink", $sql_);

			if (empty($req->diagClass)) {
				return response()->download(public_path('myzip/'.$namesql))->deleteFileAfterSend(true);
			}

		}

		if(!empty($req->diagClass)){

			$dc_ = [];
			foreach ($req->diagClass as $ke => $va) {
				$this->generate($va);
				$aux = $this->DiagramaClases($req->lng);
				Zipper::make($this->nombre.'.zip')->add($aux)->close();
				$dc_[$ke] = $this->nombre.'.zip';
				array_map("unlink", $aux);
			}
			Zipper::make('myzip/'.$nameClass)->add($dc_)->close();
			array_map("unlink", $dc_);

			if (empty($req->diagSql)) {
				return response()->download(public_path('myzip/'.$nameClass))->deleteFileAfterSend(true);
			}
		}

		Zipper::make('myzip/DiagramasSeleccionados.zip')->add(['myzip/'.$nameClass,'myzip/'.$namesql])->close();
		return response()->download(public_path('myzip/DiagramasSeleccionados.zip'))->deleteFileAfterSend(true);

	}


	public function unlinkZip(request $req){
		unlink('myzip/'.$req->name.'.zip');
	}

	function __construct(){

		$this->erroresLog ='';
		$this->error = false;
		$this->primary ='';
	}
}