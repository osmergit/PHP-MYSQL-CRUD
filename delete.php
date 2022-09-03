<?php
require("class/personal.php");
if(isset($_GET['d'])){
	$persona = new operaciones();
	$persona->delete($_GET["d"]);
}
?>
