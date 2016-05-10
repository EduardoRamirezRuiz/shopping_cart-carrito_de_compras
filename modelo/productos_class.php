<?php
	require('conexion_class.php');
	class Productos
	{
		private $conADO;
		function __construct()
		{
			$objConexion=new conexion($arg);
			$this->conADO=$objConexion->conectarADO();
		}

		public function putVenta($idprod,$mailcte,$cant,$total){
			$concte=$this->conADO->Execute("SELECT idcte from clientes where mailcte='".$mailcte."';");
			$idcte=$concte->fields[0];
			//echo "call pcven(".$idProd.",".$idcte.",".$cant.",".$total.")";
			//exit();
			$this->conADO->Execute("call pcven(".$idprod.",".$idcte.",".$cant.",".$total.")");
		}
		
		public function getProductos($campo)
		{
			$con_pds=$this->conADO->Execute("SELECT * FROM productos where idmarc=".$campo.";");
			/*$qry_pds="SELECT * from productos";
			$con_pds=mysql_query($qry_pds,
				$this->conADO);*/
			#$con_ctes=mysql_query($qry_ctes,$this->conADO);
			return $con_pds;
		}
		public function getOneProducto($id)
		{
			$con_pd=$this->conADO->Execute("SELECT * FROM productos where idProd=".$id.";");
			/*$qry_pds="SELECT * from productos";
			$con_pds=mysql_query($qry_pds,
				$this->conADO);*/
			#$con_ctes=mysql_query($qry_ctes,$this->conADO);
			return $con_pd;
		}
	}
?>
