<!DOCTYPE html>
<html>
<head>
	<title>Soporte</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/label.css">

	<div class="container-fluid" style="background: black" >
		<h1 class = "text-center" style="color: white"> Cultura</h1>
	</div>	
</head>

<body>
	<div class="container" style="background: #d5c6c6; border-radius: 10px;">
		
				<?php  
			require("BD/c_baseDatos.php");
			$seleccion = addslashes($_POST["seleccion"]);
			$buscador = "SELECT * FROM actas  WHERE direccion_que_pertenece LIKE '%$seleccion%' ORDER BY nombre ";
			$resultados = mysqli_query($conexion,$buscador);
			if ($resultados) {
				while (($fila=mysqli_fetch_row($resultados))== true) {
					echo "<table class = 'table table-bordered'>
	<tr>
		<th> Id</th>
		<th> Nombre</th>
		<th> Dirección</th>
		<th> Extencion </th>
		<th> Soporte </th>
		<th> Estado </th>

	</tr>

	<tr>
		<td> $fila[0]</td>
		<td> $fila[1]</td>
		<td> $fila[2]</td>
		<td> $fila[3]</td>
		<td> $fila[4]</td>
		<td> $fila[5]</td>
		<br>

	</tr>
</table>"; 											}

			}else {
				echo "No encontrado";
				}
		mysqli_close($conexion);
//<td><a href ='matadero.php?eliminar=$fila[0]&archivo=$fila[3]'>Eliminar</a></td>
		?>

	</div>
	<div class="row offset-md-2" style="margin-top: 2%;">
				<a href="index.php" class="btn btn-danger btn-lg col-md-3 offset-md-3" >Buscar</a>
			</div>

</body>

</html>


