<?php 
require("config_conexion.php");
$conexion = mysqli_connect($db_host,$db_usuario,$db_clave,$db_nombre);
mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base de datos");
mysqli_set_charset ($conexion,"utf8");



 ?>