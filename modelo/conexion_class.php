<?php
	require '../res/adodb5/adodb.inc.php';
	class conexion
	{
		private $SGBD='mysql';
		private $HOST='localhost';
		private $USER='root';
		private $PWD='12<12<12<';
		private $BD='pagweb';

		public function conectar()
		{
			$con = mysql_connect('localhost','root','12<12<12<') or die('No se puede conectar');
			// $con=mmsql_connect();
			mysql_select_db('pagweb') or die ('No se puede conectar');
			return $con;
		}

		public function conectarADO()
		{
			$objADO = ADONewConnection($this->SGBD); #echo 'mysql' or $db->debug=true;
			$objADO->Connect($this->HOST,$this->USER,$this->PWD,$this->BD);
			return $objADO;
		}
	}
?>