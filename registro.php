<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<?php 
$carrera = addslashes($_POST["nombre"]);
$direccion = addslashes($_POST["direccion"]);
$extencion = addslashes($_POST["extencion"]);
$soporte = addslashes($_POST["soporte"]);
$estado = addslashes($_POST["estado"]);


require("BD/c_baseDatos.php");
$registrar = "INSERT INTO incidencias (nombre,direccion_que_pertenece,extencion,soporte,estado)
			Values ('$carrera','$direccion','$extencion','$soporte','$estado')";
			$resultados = mysqli_query($conexion,$registrar);
if ($resultados) 
	{
		echo "<div class='container'>
		<h1 style='text-align: center; margin-top:10%;'>Registro guardado</h1>
		<div class'row'>
		<a href='registrar_form.php' class='btn btn-success text-uppercase' style='margin-top: 2%;  font-size: 25px; margin-left: 25%;''> Volver a registrar</a> 
		<a href='index.php' class='btn btn-danger text-uppercase' style='margin-top: 2%;  font-size: 25px;''> Buscar</a>
		</div>";
	}

else
	{
		echo "Error en el registro";
	}

mysqli_close($conexion);


 ?>