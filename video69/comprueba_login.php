<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>


<?php

try{
	
	$login=htmlentities(addslashes($_POST["login"]));
	
	$password=htmlentities(addslashes($_POST["password"]));
	$contador=0;
	
	$base=new PDO("mysql:host=localhost; dbname=bolsa" , "osmer", "123456");
	
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
	session_start();
	$_SESSION["usuario"]=$_POST["login"];
		header("location:usuariosregistrados.php");
			} else {
				
				echo "Usuario no Registrado";
			//	header("location:login.php");
			}
		
		$resultado->closeCursor();

	
	
}catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
	
}




?>
</body>
</html>