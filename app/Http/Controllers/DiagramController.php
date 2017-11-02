<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagrama;

class DiagramController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

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
		$diagrama->save();
		return 'ok';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
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

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
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
		// celdas separalas por celda[id_tabla]
		$celda = [];
		$conexiones = [];


		$diagrama = Diagrama::find(1);
		$diag =simplexml_load_string($diagrama->diagrama);


		foreach ($diag->root->mxCell as $key => $value) {

			if ((int) $value->attributes()->parent==1) {
			// tabla o union
				if ((int) $value->attributes()->source >0 && (int) $value->attributes()->target > 0) {
				// 	// tabla
				}else {
				// 	// union
				}
			}else if ((int) $value->attributes()->parent !=1 && (int) $value->attributes()->parent > 0){
				// no es tabla

			}
		}
	}	
}
