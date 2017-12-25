<?php  
namespace App\Traits;
 
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

	public function DiagramaClases(int $lng=3){

		if($lng == 2) {
			$filename = substr($this->nombre,0,strpos($this->nombre,'.')-1).'.py';
			$string = $this->genPython();
		}else if($lng == 3){
			$filename = substr($this->nombre,0,strpos($this->nombre,'.')-1).'.php';
			$string = $this->genPhp();
		}else if($lng == 4){
			$filename = substr($this->nombre,0,strpos($this->nombre,'.')-1).'.class';
			$string = $this->genJava();
		}

		if (!$this->error) {
			$f = fopen($filename,'w+');
			fwrite($f,$string);
			fclose($f);
		}
		return $filename;
	}

	private function genPhp(){

		// dd($this->tablas,$this->celdas);
		// pon el constructor para que no se vea vacio en last
		// el nombre del archivo tiene que ser el mismo de la clase...

		$codigo = "<?php\r\n\r\n\t";

		foreach ($this->tablas as $key => $tabla) {
			
			$codigo .= "class ".ucfirst(str_slug($tabla['nombre'],'_'))." {\r\r";

			foreach ($this->celdas as $index => $celda) {

				if ($tabla['id'] == $index) {

					foreach ($celda as $ind => $celditas) {

						if (isset($celditas[0])) {

							$codigo.= "\t\t".$this->TraductCls($celditas[0]['nombre'],3);
						}else{
							$codigo.= 'public function';
						}

						$codigo.= ' '.ucfirst(str_slug(str_before($celditas['nombre'],'('), '_'))."(";

						$codigo.= 
							$this->addPar(abs(round(intval(trim(str_before(str_after($celditas['nombre'],'('),')'))))),3);
						$codigo.=	") {}\r\n\t\n";
					}
				}
			}

			$codigo .= "}\r\n";
		}

		$codigo .= '?>';
		return $codigo;
	}
	private function genPython(){

		$codigo = '';

		foreach ($this->tablas as $key => $tabla) {
			
			$codigo .= "class ".ucfirst(str_slug($tabla['nombre'],'_')).":\r\r";

			foreach ($this->celdas as $index => $celda) {

				if ($tabla['id'] == $index) {

					foreach ($celda as $ind => $celditas) {

						if (isset($celditas[0])) {

							$codigo.= "\tdef ".$this->TraductCls($celditas[0]['nombre'],2);
						}

						$codigo.= ucfirst(str_slug(str_before($celditas['nombre'],'('), '_'))."(";

						$codigo.= 
							$this->addPar(abs(round(intval(trim(str_before(str_after($celditas['nombre'],'('),')'))))),2);
						$codigo.=	"):\r\t\tpass\r\r";
					}
				}
			}
		}
		return $codigo;
	}
	private function genJava(){
		
		$codigo = '';

		foreach ($this->tablas as $key => $tabla) {
			
			$codigo .= "public class ".ucfirst(str_slug($tabla['nombre'],'_'))." {\r\r";

			$codigo .= "\tpublic ".ucfirst(str_slug($tabla['nombre'],'_'))."() {}\r\n\t\n";

			foreach ($this->celdas as $index => $celda) {

				if ($tabla['id'] == $index) {

					foreach ($celda as $ind => $celditas) {

						if (isset($celditas[0])) {

							$codigo.= "\t".$this->TraductCls($celditas[0]['nombre'],4);
						}else{
							$codigo.= 'public function';
						}

						$codigo.= ' '.ucfirst(str_slug(str_before($celditas['nombre'],'('), '_'))."(";

						$codigo.= 
							$this->addPar(abs(round(intval(trim(str_before(str_after($celditas['nombre'],'('),')'))))),4);

						$codigo.=	") {}\r\n\t\n";
					}
				}
			}
			$codigo .= "}\r\n";
		}
		return $codigo;
	}
}