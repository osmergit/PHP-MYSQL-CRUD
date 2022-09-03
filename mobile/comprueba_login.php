<?
ob_start();
?>

<?php


try{
	
	$login=htmlentities(addslashes($_POST["login"]));
	
	$password=htmlentities(addslashes($_POST["password"]));
	$contador=0;
	
	$base=new PDO("mysql:host=inviertaenusa.co; dbname=invierta_bolsa" , "invierta_base", "bolsa2017*");
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	$sql="SELECT * FROM inversionista WHERE ced_inver= :ced_inver";
	
	$resultado=$base->prepare($sql);	
		
	$resultado->execute(array(":ced_inver"=>$login));
		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){			
			
		//	echo "Usuario: " . $registro['ced_inver'] . " Contraseña: " . $registro['clave_inv'] . "<br>";			
		if(password_verify($password, $registro['clave_inv'])) {
		$contador++;	
			
		}	
		}

			if ($contador>0) {
	echo "Usuario Registrado";
	 echo  "Paso por aqui zz";
		
	session_start();
	$_SESSION["usuario"]=$_POST["login"];
	if ($_SESSION["usuario"]== 91488607)
	  {
		  
		  $_SESSION[$sessVar] = 'hello world';  
		 echo  "Paso por aqui 123";
		 // header("location:open.php");
		// include "adminopabiertas.php"
	header("location: adminopabiertas.php");
	//	header("location:adminopabiertas.php");
	  } else {
		  
	 header("location:zonausuarios.php");	  
	  }
	  
			} else {
				
				echo "Usuario no Registrado";
			 header("location:login.php");
			}
		
		$resultado->closeCursor();

	
	
}catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
	
}

?>

<html>

<head>
</head>
<body>
</body>

</html>

<?
ob_end_flush();
?>
