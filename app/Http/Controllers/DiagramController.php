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

		// $diag->root->mxCell todas las celdas de las tablas
		// parent 1 y sin source ni target son tablas
		// parent 1 con surce y targey conexiones flechas puede ser, si no tiene no agregar
		// 
		// para saber a que celda pertenece a que tabla, tienen parent = al id de la tabla.

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


	function Laucher(Request $req) {

	// diag_c diagrama xml
	// id_diag diagrama para buscarlo

		if ($this->generate($req->id_diag)) {
			$f = $this->EntidadRelacion();
		}else{
			$f = $this->DiagramaClases($req->lng);
		}

		if ($this->error ) {
			return view('error')->with(['erroresLog' => $this->erroresLog]);
		}else{
			$d = Diagrama::find($req->id_diag);
			if($d->status==1){

				$d->delete();
				$fm = $this->nombre.'.zip';

				Zipper::make('myzip/'.$fm)->add($f)->close();
				
				array_map("unlink", $f);

				return response()->download(public_path('myzip/'.$fm))->deleteFileAfterSend(true);
				
			}else{
				return response()->download($f)->deleteFileAfterSend(true);
			}
		}	
	}

	function __construct(){

		$this->erroresLog ='';
		$this->error = false;
		$this->primary ='';
	}
}