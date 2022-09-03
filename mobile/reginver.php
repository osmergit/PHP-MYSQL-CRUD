<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script type="text/javascript">
function closeCurrentWindow()
{
  window.close();
}
</script>

</head>

<body>

<?php    
$ced_inver = $_GET ["ced_inver"];
print $ced_inver;
echo "<br>";
$nom_inv  = $_GET ["nom_inv"];
print $nom_inv;
echo "<br>";
$ape_inv  = $_GET ["ape_inv"];
print $ape_inv;
echo "<br>";
$cel_inv  = $_GET ["cel_inv"];
print $cel_inv;
echo "<br>";
$email_inv  = $_GET ["email_inv"];
print $email_inv;
echo "<br>";
$clave_inv  = $_GET ["clave_inv"];
//print $clave_inv;
echo "<br>";
$tel_inv  = $_GET ["tel_inv"];
$dir_inv  = $_GET ["dir_inv"];
$barrio_inv  = $_GET ["barrio_inv"];
$ciudad_inv  = $_GET ["ciudad_inv"];
$dep_inv = $_GET ["dep_inv"];
$pais_inv   = $_GET ["pais_inv"];
$inv_inicial  = $_GET ["inv_inicial"];
print $inv_inicial;
$db_host="inviertaenusa.co";

$db_usuario= "invierta_base";

$db_contra="bolsa2017*";
$bd = "invierta_bolsa";

$conexion1 = mysqli_connect($db_host, $db_usuario,$db_contra,$bd);
$consulta = "SELECT * FROM inversionista";
$resultados = mysqli_query($conexion1, $consulta);
mysqli_set_charset($conexion1,"utf8");
while(($fila=mysqli_fetch_row($resultados)) == true) {
//$fila=mysqli_fetch_row($resultados);
echo $fila[0];
echo $fila[1];
echo $fila[2];
echo $fila[3];
echo $fila[4];
echo $fila[5];
echo $fila[6];
echo $fila[7];
echo"<br>";
}
if ( mysqli_connect_errno()){
echo "fallo al conectar con la BBDD";
	exit();
}else{
echo "conecto con la BBDD";	

}

//mysqli_select_db($conexion1) or die ("No se encuentra la base de Datos");
$pass_cifrado=password_hash($clave_inv, PASSWORD_DEFAULT);
$sql = "INSERT INTO inversionista(ced_inver,nom_inv,ape_inv,cel_inv,email_inv,clave_inv,tel_inv,dir_inv,barrio_inv,ciudad_inv,dep_inv,pais_inv,inv_inicial) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
$resultado = mysqli_prepare($conexion1,$sql);
$ok = mysqli_stmt_bind_param($resultado,"isssssssssssi",$ced_inver, $nom_inv,$ape_inv,$cel_inv,$email_inv,$pass_cifrado,$tel_inv,$dir_inv,$barrio_inv,$ciudad_inv,$dep_inv,$pais_inv,$inv_inicial);
$oki=mysqli_stmt_execute($resultado);
if($oki==false){
	
echo "Error al ejecutar la consulta";
}else{
	echo "se agrego un nuevo registro en la bd ";
	//echo "<script>window.location.href=' http://www.inviertaenusa.co/index.php'</script>";
	echo "<script type='text/javascript'>"; 
echo "window.close()"; 
echo "</script>"; 
exit();
	
}
if(mysqli_stmt_affected_rows($resultado) != 1)
    die("issues");
mysqli_stmt_close($resultado);
return "new";

//mysqli_database($bd,$conexion);

//$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
//if ( mysqli_connect()){
//	echo "fallo al conectar con la BBDD";
//	exit();
//}else{
//	echo "conecto con la BBDD";	
//}
mysqli_close($conexion1);

?>
</body>
</html>