<?php 

namespace App\Traits;
 
trait DiagER{

	public function ValidData($tipo='',$dato=''){

		if($tipo == '' || $dato ==''){
			return $dato.'(1)';
		}else{
			$aux = abs(round(intval(trim(str_before(str_after(substr($tipo,strpos($tipo, $dato)),'('),')')))));

			if (is_numeric($aux)) {
				if ($aux < 255 && $aux > 0) {
					$var= $dato.'('.$aux.')';
				}else{
					$var= $dato.'(190)';
				}
			}else{
				$var = $dato.'(100)';
			}
			return $var;
		}
	}

	public function Traduct($tipo,$cellname){

		$tipo = strtoupper($tipo);
		$var='';
		// tipo de dato numerico
		if (str_contains($tipo, 'INT') || str_contains($tipo, 'IN')|| str_contains($tipo, 'IT')) {

			$var = $this->ValidData($tipo,'INT');

		}else if (str_contains($tipo, 'SMALLINT')|| str_contains($tipo, 'SINT')) {

			$var = $this->ValidData($tipo,'SMALLINT');

		}else if (str_contains($tipo, 'TINYINT')|| str_contains($tipo, 'TINT')) {

			$var = $this->ValidData($tipo,'TINYINT');

		}else if (str_contains($tipo, 'MEDIUMINT')|| str_contains($tipo, 'MINT')) {

			$var = $this->ValidData($tipo,'MEDIUMINT');

		}else if (str_contains($tipo, 'BIGINT')|| str_contains($tipo, 'BINT')) {

			$var = $this->ValidData($tipo,'BIGINT');

		}else if (str_contains($tipo, 'DECIMAL')|| str_contains($tipo, 'DEC')) {

			$var = $this->ValidData($tipo,'DECIMAL');

		}else if (str_contains($tipo, 'FLOAT')|| str_contains($tipo, 'FT')) {

			$var = $this->ValidData($tipo,'FLOAT');

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

			$var = $this->ValidData($tipo,'CHAR');

		}else if (str_contains($tipo, 'VARCHAR') || str_contains($tipo, 'VRCH') || str_contains($tipo, 'STR')) {

			$var = $this->ValidData($tipo,'VARCHAR');

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
	
}