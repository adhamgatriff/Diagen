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
		else if($lng == 4){ $ext = '.java'; }else{ $ext = '.php';}

		return $ext;
	}
	public function DiagramaClases(int $lng=3){

		$filesName= [];

		if($lng == 2) {
			$ext = '.py'; $method = 'python';
		}else if($lng == 3){
			$ext = '.php'; $method = 'php';
		}else if($lng == 4){
			$ext = '.java'; $method = 'java';
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

		$conx ='';
		foreach ($this->conexiones as $key => $conexion) {
			$conexion['tipo'] = ($conexion['tipo']=='')?'ext':$conexion['tipo'];
			if ($conexion['desde'] == $idTabla) {
				if ($conexion['tipo']=='ext') {
					if ($this->tablas[$conexion['desde']]['interfaz']==0 && $this->tablas[$conexion['hasta']]['interfaz']==0) {
						if($lng==3){
							$conx.=' extends '.$this->tablas[$conexion['hasta']]['nombre'];
						}else if($lng==4){
							$conx.=' extends '.$this->tablas[$conexion['hasta']]['nombre'];
						}else if($lng==2){
							$conx.='('.$this->tablas[$conexion['hasta']]['nombre'].')';
						}
					}else{
						$this->error= true;
						$this->erroresLog.='Para usar extends las conexiones deben ser entre clases';
					}
				}else if($conexion['tipo']=='imp'){
					if ($this->tablas[$conexion['hasta']]['interfaz']==1 && $this->tablas[$conexion['desde']]['interfaz']==0) {
						if($lng==3){
							$conx.=' implements '.$this->tablas[$conexion['hasta']]['nombre'];
						}else if($lng==4){
							$conx.=' implements '.$this->tablas[$conexion['hasta']]['nombre'];
						}else if($lng==2){
							$conx.='('.$this->tablas[$conexion['hasta']]['nombre'].')';
						}
					}else{
						$this->error= true;
						$this->erroresLog.='Para implementar una interfaz tiene que ser desde una clase hacia una interfaz';
					}
				}
			}
		}

		return $conx;
	}
	private function HandleAggCom($idTabla, int $lng=3){

		$import = []; $variable =[]; $method= [];$insConstr= [];
		
		foreach ($this->conexiones as $key => $conexion) {
			unset($tablaHasta);
			$tablaHasta = $this->tablas[$conexion['hasta']]['nombre'];

			if ($conexion['desde'] == $idTabla) {
				if ($conexion['tipo']=='agg') {
					if ($this->tablas[$conexion['desde']]['interfaz']==0 && $this->tablas[$conexion['hasta']]['interfaz']==0) {
						if($lng==3){

							$variable[$key] ='private $_'.strtolower($tablaHasta).'= array();';
							$method[$key]= 'public function add'.ucfirst(camel_case($tablaHasta)).'('.ucfirst(camel_case($tablaHasta)).' $'.$tablaHasta.'){'."\n\n\t\t\t";
							$method[$key].= '$this->_'.$tablaHasta.'[] = $'.$tablaHasta.';'."\n\t\t}\n\n";

						}else if($lng==4){
							$variable[$key] ='public '.ucfirst(camel_case($tablaHasta)).' '.strtolower($tablaHasta);
							$method[$key]= 'public void add'.ucfirst(camel_case($tablaHasta)).' ('.ucfirst(camel_case($tablaHasta)).' '.strtolower(substr($tablaHasta,0,1)).'){'."\n\n\t\t";
							$method[$key].= strtolower($tablaHasta).' = '.strtolower(substr($tablaHasta,0,1)).';'."\n\t}\n\n";

						}else if($lng==2){
							$variable[$key] = strtolower($tablaHasta).'= '.ucfirst(camel_case($tablaHasta)).'()';
							$method[$key]= 'def add'.ucfirst(camel_case($tablaHasta)).'(self, '.strtolower($tablaHasta).')'."\n\t\t";
							$method[$key].= 'pass'."\n\t\t\n";

						}
					}else{
						$this->error= true;
						$this->erroresLog.='Esta relacion solo se puede hacer entre clases';
					}
				}else if($conexion['tipo']=='com'){ //nombre tentativo
					if ($this->tablas[$conexion['desde']]['interfaz']==0 && $this->tablas[$conexion['hasta']]['interfaz']==0) {
						if($lng==3){
							$variable[$key] ='private $_'.strtolower($tablaHasta).';';
							$method[$key]= 'public function add'.ucfirst(camel_case($tablaHasta)).'(){'."\n\n\t\t\t";
							$method[$key].= '$this->_'.$tablaHasta.' = new '.ucfirst(camel_case($tablaHasta)).'();'."\n\t\t}\n\n";

						}else if($lng==4){
							$insConstr[$key]= strtolower($tablaHasta).' = new '.ucfirst(camel_case($tablaHasta)).'();'."\n\t";

						}else if($lng==2){
							$variable[$key] = strtolower($tablaHasta).' = None';
							$method[$key]= 'def add'.ucfirst(camel_case($tablaHasta)).'(self)'."\n\t\t";
							$method[$key].= 'self.'.strtolower($tablaHasta)."= ".ucfirst(camel_case($tablaHasta))."()\n\t\t\n";

						}
					}else{
						$this->error= true;
						$this->erroresLog.='Esta relacion solo se puede hacer entre clases';
					}
				}

				if($conexion['tipo']=='agg' || $conexion['tipo']=='com'){
					if($lng==3){
						$import[$key] = "require_once '".ucfirst(camel_case($tablaHasta)).".php';";
					}else if($lng==4){
						$variable[$key] ='public '.ucfirst(camel_case($tablaHasta)).' '.strtolower($tablaHasta);
					}else if($lng==2){

					}
				}
			}
		}

		return [ 'import' => $import, 'variable' => $variable, 'method' => $method,'insConstr' => $insConstr];
	}
	private function genPhp($tabla){

		$arri = $this->HandleAggCom($tabla['id'],3);

		if($tabla['interfaz']){
			$codigo = "<?php\r\n\r\n\tinterface ".ucfirst(camel_case($tabla['nombre']))." {\r\r";
		}else{

			$codigo = "<?php";
			if(count($arri['import'])>0){
				foreach ($arri['import'] as $ind => $value) {
					if (!last($arri['import'])==$ind) {
						$codigo .=  "\r\n\r\n\t".$value;
					}else{
						$codigo .= "\n\t".$value."";
					}
				}
			}
			$codigo .= "\r\n\r\n\tclass ".ucfirst(camel_case($tabla['nombre']));
			$codigo.= $this->HandleConexion($tabla['id'],3)."{\n\n";
			if(count($arri['variable'])>0){
				foreach ($arri['variable'] as $indi => $value) {
					if (!last($arri['variable'])==$indi) {
						$codigo .=  "\t\t".$value."\n";
					}else{
						$codigo .=  "\t\t".$value."\n";
					}
				}
			}
			$codigo .= "\r\r\t\tfunction __construct() {}\r\n\t\n";
			if(count($arri['method'])>0){
				foreach ($arri['method'] as $in => $value) {
					$codigo .=  "\t\t".$value;
				}
			}
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
		
		$arri = $this->HandleAggCom($tabla['id'],4);

		if($tabla['interfaz']){
			$codigo = "interface ".ucfirst(camel_case($tabla['nombre']))." {\r\r";
		}else{
			$codigo = "public class ".ucfirst(camel_case($tabla['nombre']));
			$codigo.= $this->HandleConexion($tabla['id'],4)." {\r\r\t";

			if(count($arri['variable'])>0){
				foreach ($arri['variable'] as $indi => $value) {
					if (!last($arri['variable'])==$indi) {
						$codigo .= $value.";\n";
					}else{
						$codigo .= "\t".$value.";\n";
					}
				}
			}

			$codigo .= "\r\r\tpublic ".ucfirst(camel_case($tabla['nombre']))."() {";
			
			if(count($arri['insConstr'])>0){
				foreach ($arri['insConstr'] as $inda => $value) {
					if (!last($arri['insConstr'])==$inda) {
						$codigo .= "\n\t\t".$value."";
					}else{
						$codigo .= "\t\t".$value."\n";
					}
				}
			}

			$codigo.="}\r\n\n";

			if(count($arri['method'])>0){
				foreach ($arri['method'] as $in => $value) {
					$codigo .=  "\t".$value;
				}
			}
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

		$arri = $this->HandleAggCom($tabla['id'],2);

		if($tabla['interfaz']){

			$codigo ="from abc import ABCMeta, abstractmethod\r\r";
			$codigo .="class ".ucfirst(camel_case($tabla['nombre'])).":\r\t__metaclass__ = ABCMeta\r\r";

		}else{
			$codigo = "class ".ucfirst(camel_case($tabla['nombre']));
			$codigo.= $this->HandleConexion($tabla['id'],2).":\n\n";

			if(count($arri['variable'])>0){
				foreach ($arri['variable'] as $andx => $value) {
					if (!last($arri['variable'])==$andx) {
						$codigo .=  "\t".$value."\n";
					}else{
						$codigo .=  "\t".$value."\n";
					}
				}
			}

			$codigo .= "\r\r\tdef __init__(self):\r\t\tpass\r\r"; 

			if(count($arri['method'])>0){
				foreach ($arri['method'] as $in => $value) {
					$codigo .=  "\t".$value;
				}
			}

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