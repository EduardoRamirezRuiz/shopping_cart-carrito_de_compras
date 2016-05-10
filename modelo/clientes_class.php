<?php
	require('conexion_class.php');
	class Clientes
	{
		private $nomcte;
		private $apepat;
		private $apemat;
		private $dircte;
		private $telcte;
		private $mailcte;
		private $gencte;
		private $edadcte;
		private $con;
		private $conADO;
		private $passw;

		function __construct($nomcte,$apepat,$apemat,$dircte,$telcte,$mailcte,$gencte,$edadcte)
		{
			$this->nomcte=$nomcte;
			$this->apepat=$apepat;
			$this->apemat=$apemat;
			$this->dircte=$dircte;
			$this->telcte=$telcte;
			$this->mailcte=$mailcte;
			$this->gencte=$gencte;
			$this->edadcte=$edadcte;

			$objConexion=new conexion();
			$this->con=$objConexion->conectar();
			$this->conADO=$objConexion->conectarADO();
		}

		public function loginADO(){
			return $this->conADO->Execute("SELECT nomcte,pwdcte FROM clientes WHERE mailcte='".$this->mailcte."';");
		}

		public function checkMail(){
			return $this->conADO->Execute("SELECT mailcte FROM clientes WHERE mailcte='".$this->mailcte."';");
		}

		public function setNomCte($nomcte)
		{
			$this->nomcte=$nomcte;
		}
		public function getNomCte()
		{
			return $this->nomcte;
		}
		public function updCount(){
			$this->passw=$this->generaPass();
			$pwd=md5($this->passw);
			return $this->conADO->Execute("UPDATE clientes SET pwdcte='".$pwd."' where mailcte='".$this->mailcte."';");
		}

		public function getPassADO(){
			//echo "SELECT pwdcte FROM clientes WHERE nomcte='".$this->nomcte."' and apepat='".$this->apepat."' and apemat='".$this->apemat."' and dircte='".$this->dircte."' and telcte='".$this->telcte."' and mailcte='".$this->mailcte."' and gencte='".$this->gencte."' and edacte='".$this->edadcte."';";
			//exit();
			return $this->conADO->Execute("SELECT pwdcte FROM clientes WHERE nomcte='".$this->nomcte."' 
																		and apepat='".$this->apepat."' 
																		and apemat='".$this->apemat."' 
																		and dircte='".$this->dircte."' 
																		and telcte='".$this->telcte."' 
																		and mailcte='".$this->mailcte."' 
																		and gencte='".$this->gencte."' 
																		and edacte='".$this->edadcte."';");
		}
		public function getPassToMail(){
			return $this->passw;
		}

		
		public function insClienteADO()
		{
			# codigo para insertar clientes
			$this->passw=$this->generaPass();
			$pwd=md5($this->passw);
			$qry_cte="CALL abcclientes(0,'".$this->nomcte."',
										 '".$this->apepat."',
										 '".$this->apemat."',
										 '".$this->dircte."',
										 '".$this->telcte."',
										 '".$this->mailcte."',
										 '".$this->gencte."',
										 '".$this->edadcte."',
										 1,'".$pwd."');";
			return $this->conADO->Execute($qry_cte);
		}


		function generaPass(){
		    //Se define una cadena de caractares. Te recomiendo que uses esta.
		    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		    //Obtenemos la longitud de la cadena de caracteres
		    $longitudCadena=strlen($cadena);
		     
		    //Se define la variable que va a contener la contraseña
		    $pass = "";
		    //Se define la longitud de la contraseña, en mi caso 10, pero puedes poner la longitud que quieras
		    $longitudPass=10;
		     
		    //Creamos la contraseña
		    for($i=1 ; $i<=$longitudPass ; $i++){
		        //Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
		        $pos=rand(0,$longitudCadena-1);
		     
		        //Vamos formando la contraseña en cada iteraccion del bucle, añadiendo a la cadena $pass la letra correspondiente a la posicion $pos en la cadena de caracteres definida.
		        $pass .= substr($cadena,$pos,1);
		    }
		    return $pass;
		}

		public function insCliente()
		{
			# codigo para insertar clientes
			$qry_cte="CALL abcclientes(0,'".$this->nomcte."',
										 '".$this->apepat."',
										 '".$this->apemat."',
										 '".$this->dircte."',
										 '".$this->telcte."',
										 '".$this->mailcte."',
										 '".$this->gencte."',
										 '".$this->edadcte."',
										 1)";
			
			$ins_Cliente=mysql_query($qry_cte,$this->con);
		}

		public function actCliente()
		{

			$qry="CALL abcclientes(".$this->idcte.",'".$this->nomcte."',
										 '".$this->apepat."',
										 '".$this->apemat."',
										 '".$this->dircte."',
										 '".$this->telcte."',
										 '".$this->mailcte."',
										 '".$this->gencte."',
										 '".$this->edadcte."',
										 2)";
			#$act_Cliente=mysql_query($qry,$this->con);
			$this->conADO->Execute($qry);
		}
		public function actClienteADO()
		{

			echo $qry="CALL abcclientes(".$this->idcte.",'".$this->nomcte."',
										 '".$this->apepat."',
										 '".$this->apemat."',
										 '".$this->dircte."',
										 '".$this->telcte."',
										 '".$this->mailcte."',
										 '".$this->gencte."',
										 '".$this->edadcte."',
										 2)";
			$act_Cliente=mysql_query($qry,$this->con);
		}
		public function delCliente()
		{
			# codigo para eliminar clientes
		}
		public function getClientes()
		{
			$qry_ctes="SELECT * from clientes;";
			$con_ctes=mysql_query($qry_ctes,
				$this->con);
			#$con_ctes=mysql_query($qry_ctes,$this->conADO);
			return $con_ctes;
		}

		public function setIdCte($idcte)
		{
			$this->idcte=$idcte;
		}
	}
?>