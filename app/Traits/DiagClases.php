<?php  
namespace App\Traits;
use Auth;
 
trait DiagClases{

	private function addPar(int $num=0,int $lng=3){

		$str = '';

		if ($num == 0 && $lng != 2) {

		}else{

			$num = ($num > 6) ? 6 : $num;  

			if($lng==2){
				$str .= ' self';
				for ($i=0; $i < $num; $i++) { 
					if($i==0){
						$str .= ', var'.($i+1);
					}else{
						$str .= ' var'.($i+1);
					}
					if ($i < $num-1) {
						$str .=',';
					}
				}

			}else if($lng==3){
				for ($i=0; $i < $num; $i++) { 
					$str .= ' $var'.($i+1);
					if ($i < $num-1) {
						$str .=',';
					}
				}
			}else if($lng==4){
				for ($i=0; $i < $num; $i++) { 
					$str .= ' String var'.($i+1);
					if ($i < $num-1) {
						$str .=',';
					}
				}
			}
			return $str;
		}
	}
	public function TraductCls($tipo,$lng){

		$tipo = strtoupper($tipo);
		$var='';
		
		if (str_contains($tipo, 'PUB') || str_contains($tipo, 'PUBLIC')|| str_contains($tipo, '+')) {

			if($lng == 3){ $var = 'public function'; }
			else if($lng == 2){ $var = ''; }
			else if($lng == 4){ $var = 'public void';}
			
		}else if (str_contains($tipo, 'PRIV')|| str_contains($tipo, 'PRIVATE')|| str_contains($tipo, '-')) {

			if($lng == 3){ $var = 'private function'; }
			else if($lng == 2){ $var = '__'; }
			else if($lng == 4){ $var = 'private void';}

		}else{

			if($lng == 3){ $var = 'public function'; }
			else if($lng == 2){ $var = ''; }
			else if($lng == 4){ $var = 'public void';}
		}
		return is_string($var) ? $var: false;
	}
	public function returnExt(int $lng=3){

    if($lng == 2){ $ext = '.py'; }else if($lng == 3){ $ext = '.php';}
		else if($lng == 4){ $ext = '.class'; }else{ $ext = '.php';}

		return $ext;
	}
	public function DiagramaClases(int $lng=3){

		$filesName= [];

		if($lng == 2) {
			$ext = '.py'; $method = 'python';
		}else if($lng == 3){
			$ext = '.php'; $method = 'php';
		}else if($lng == 4){
			$ext = '.class'; $method = 'java';
		}

		foreach ($this->tablas as $key => $tabla) {

			unset($f,$string);
			$filesName[$key] = $tabla['nombre'].Auth::user()->id.$key.$ext;

			if ($method == 'php') {
				$string = $this->genPhp($tabla);
			}else if($method == 'python'){
				$string = $this->genPython($tabla);
			}else if ($method == 'java') {
				$string = $this->genJava($tabla);
			}
			
			if (!$this->error) {
				$f = fopen($filesName[$key],'w+');
				fwrite($f,$string);
				fclose($f);
			}
		}
		return $filesName;
	}
	private function HandleConexion($idTabla, int $lng=3){
		// validar error, claro que si;

		$conx ='';
		foreach ($this->conexiones as $key => $conexion) {
			
			if ($conexion['desde'] == $idTabla) {
				if ($conexion['tipo']=='ext') {
					if ($lng==3) {
						$conx.=' extends '.$this->tablas[$conexion['hasta']]['nombre'];
					}else if($lng==4){
						$conx.=' extends '.$this->tablas[$conexion['hasta']]['nombre'];
					}else if($lng==2){
						$conx.='('.$this->tablas[$conexion['hasta']]['nombre'].')';
					}
				}else if($conexion['tipo']=='imp'){

				}
			}
		}

		return $conx;
	}
	private function genPhp($tabla){

		if($tabla['interfaz']){
			// validar que sea implements

			$codigo = "<?php\r\n\r\n\tinterface ".ucfirst(camel_case($tabla['nombre']))." {\r\r";
		}else{
			$codigo = "<?php\r\n\r\n\tclass ".ucfirst(camel_case($tabla['nombre']));
			$codigo.= $this->HandleConexion($tabla['id'],3);

			// validat que sea extends
			$codigo .= " {\r\r\t\tfunction __construct() {}\r\n\t\n";
		}

		foreach ($this->celdas as $index => $celda) {

			if ($tabla['id'] == $index) {

				foreach ($celda as $ind => $celditas) {

					if (isset($celditas[0])) {

						$codigo.= "\t\t".$this->TraductCls($celditas[0]['nombre'],3);
					}else{
						$codigo.= "\t\tpublic function";
					}

					$codigo.= ' '.ucfirst(camel_case(str_before($celditas['nombre'],'(')))."(";

					$codigo.= 
						$this->addPar(abs(round(intval(trim(str_before(str_after($celditas['nombre'],'('),')'))))),3);
					$codigo.=	") {}\r\n\t\n";
				}
			}
		}

		$codigo .= "}\r\n?>";

		return $codigo;
	}	
	private function genJava($tabla){
		
		if($tabla['interfaz']){
			$codigo = "interface ".ucfirst(camel_case($tabla['nombre']))." {\r\r";
		}else{
			$codigo = "public class ".ucfirst(camel_case($tabla['nombre']));
			$codigo.= $this->HandleConexion($tabla['id'],4);
			$codigo .= " {\r\r\tpublic ".ucfirst(camel_case($tabla['nombre']))."() {}\r\n\t\n";
		}

		foreach ($this->celdas as $index => $celda) {

			if ($tabla['id'] == $index) {

				foreach ($celda as $ind => $celditas) {

					if (isset($celditas[0])) {

						$codigo.= "\t".$this->TraductCls($celditas[0]['nombre'],4);
					}else{
						$codigo.= "\tpublic void";
					}

					$codigo.= ' '.ucfirst(camel_case(str_before($celditas['nombre'],'(')))."(";

					$codigo.= 
						$this->addPar(abs(round(intval(trim(str_before(str_after($celditas['nombre'],'('),')'))))),4);

					$codigo.=	") {}\r\n\t\n";
				}
			}
		}
		$codigo .= "}\r\n";
		return $codigo;
	}
	private function genPython($tabla){

		if($tabla['interfaz']){

			$codigo ="from abc import ABCMeta, abstractmethod\r\r";
			$codigo .="class ".ucfirst(camel_case($tabla['nombre'])).":\r\t__metaclass__ = ABCMeta\r\r";

		}else{
			$codigo = "class ".ucfirst(camel_case($tabla['nombre']));
			$codigo.= $this->HandleConexion($tabla['id'],2);
			$codigo .= ":\r\r\tdef __init__(self):\r\t\tpass\r\r"; 
		}
		

		foreach ($this->celdas as $index => $celda) {

			if ($tabla['id'] == $index) {

				foreach ($celda as $ind => $celditas) {

					if (isset($celditas[0])) {
						$codigo.= "\tdef ".$this->TraductCls($celditas[0]['nombre'],2);
					}else{
						$codigo.= ($tabla['interfaz']) ? "\t@abstractmethod\r": "";
						$codigo.= "\tdef ";
					}

					$codigo.= ucfirst(camel_case(str_before($celditas['nombre'],'(')))."(";

					$codigo.= 
						$this->addPar(abs(round(intval(trim(str_before(str_after($celditas['nombre'],'('),')'))))),2);
					$codigo.=	"):\r\t\tpass\r\r";
				}
			}
		}
		return $codigo;
	}

}