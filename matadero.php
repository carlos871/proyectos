<!DOCTYPE html>
<html>

<head>
	<title>Cultura</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<div class="container-fluid" style="background: black" >
		<h1 class = "text-center" style="color: white"> Cultura</h1>	
	</div>

</head>

<body>
<?php  
	require("BD/c_baseDatos.php");
	$eliminar = $_GET["eliminar"];
	$archivo = $_GET["archivo"];
	unlink("upload/".$archivo);
	$buscador = "DELETE FROM actas WHERE id = '$eliminar'";
	$resultados = mysqli_query($conexion,$buscador);

	if ($resultados) {
		echo "<h1 class ='offset-md-5'>Registro Eliminado</h1>";
		echo "<a href='index.php' class='btn btn-danger btn-lg col-md-2 offset-md-5' >Buscar</a>";
	}	else{
			echo "Error en eliminar";
	}
mysqli_close($conexion);
?>

</body>
</html>
