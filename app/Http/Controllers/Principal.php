<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Validation\Rule;
use Validator;
use App\UsuarioDiagrama;
use App\Usuario;
use App\Diagrama;

class Principal extends Controller
{

	public function parseNombre(string $st){

		if(strpos($st,'.') === false){

				$nom = $st;
			}else{
				$nom = substr($st,0,strpos($st,'.'));
			}
			return $nom;
	}

	public function ReturnDiagrams(){
		// busca los diagramas del usuario logeado
		$diag = UsuarioDiagrama::where('id_usuario',Auth::user()->id)->get();
		$diagm = [];
		// extrae los datos que se necesitan de todos los diagramas
		foreach ($diag as $key => $value) {
			$value_= $value->diagramas;
			if ($value_->status==0) {
				$diagm[$key] = [
					'id' 			=> $value_->id,
					'nombre' 	=>  $this->parseNombre($value_->nombre),
					'tipo' 		=> $value_->tipo,
					'act' 		=> $value_->updated_at,
					'cread' 	=> $value_->created_at,
					'nombreI' => Auth::user()->id.$value_->id.'.png'
				];
			}
		}
		// se retorna la vista llamada principal con los datos de los diagramas y del usuario
		return view('principal')->with(['datos' => $diagm, 'userData' =>Usuario::find(Auth::user()->id) ]);
	}

	// metodo de actualizacion de datos del usuario
	public function updUsuarios(Request $req){

		$validator = Validator::make($req->all(),[
			'username' => 'required|string|max:255|unique:usuarios,username,'.Auth::user()->id,
			'correo' => 'required|string|email|max:255|unique:usuarios,email,'.Auth::user()->id,
			'nombre'  => 'string',
			'apellido'=> 'string'
		]);
		
		// validaciones opcionales
		$validator->sometimes('pass', 'string|min:6|confirmed', function ($input) {
			return $input->pass != null;
		});

		if ($validator->fails()) {

		// retornar errores por si fallan las validaciones 
			return response()->json($validator->errors()->all());

		}else{
			// si todo esta bien actualiza el usuario en la base de datos
			$user = Usuario::find(Auth::user()->id);
			$user->username = $req->username;
			$user->nombre = $req->nombre;
			$user->apellido = $req->apellido;
			$user->email = $req->correo;
			$user->save();
			return 'ok';
		}
	}

	public function editGraph(Request $req){

		$filename = Auth::user()->id.$req->data.'ja.xml';
		$f = fopen(public_path().'/diagramasXml/'.$filename,'w+');
		$dd = Diagrama::find($req->data);
		fwrite($f,$dd->diagrama);
		fclose($f);

		return response()->json(['filename' => Auth::user()->id.$req->data,'tipo'=>$dd->tipo]);
	}

	public function deleteAuxGraph(Request $r){
		unlink(public_path().'/diagramasXml/'.$r->filename);
	}

	public function diagUsuarios(){

		$diag= [];
		$ud = UsuarioDiagrama::where('id_usuario',Auth::user()->id)->get();

		foreach ($ud as $key => $value) {
			$diag_ = $value->diagramas; 
			$diag[$key] = ['id' => $diag_->id,'nombre' => $this->parseNombre($diag_->nombre) ,'tipo' => $diag_->tipo];
			unset($diag_);
		}

		return response()->json($diag);
	}
}
