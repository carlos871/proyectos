<!DOCTYPE html>
<html>
<head>
	<title>Cultura</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/label.css">
	<div class="container-fluid" style="background: black" >
		<h1 class = "text-center" style="color: white"> Soporte</h1>	
	</div>
</head>
<body>
	<div class="container" style="background: #d5c6c6">
<h1>Registro</h1>
<form action="registro.php" method="POST" class="form-group" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nombre</label>
		<input type="text" name="nombre" required>
	</div>
	<div class="form-group" >
		<label>Dirección en la que pertenece</label>
		<select name="direccion" required>
			<option value=""></option>
			<option value="Direccion de Tecnologia de la Información">Direccion de Tecnologia de la Información</option>
	
		</select>
	</div>

	<div class="form-group">
			<label>Extención</label>
			<input type="text" name="extencion">
	</div>
	<div class="form-group" >
		<label>Soporte</label>
			<select name="soporte" required>
			<option value=""></option>
			<option value="2010-2">2010-2</option>
			<option value="2011-1">2011-1</option>
			<option value="2011-2">2011-2</option>
			<option value="2012-1">2012-1</option>

		</select>
	</div>
	<div class="form-group" >
	<label>Estado</label>
	<select name="estado" required>
			<option value="ACTIVO">ACTIVO</option>
			<option value="TERMINADO">TERMINADO</option>
			<option value="ACTIVO-Div.Telecomunicaciones">ACTIVO-Div.Telecomunicaciones y Redes</option>
			<option value="ACTIVO-Div.Proyectos e Innovaciones Tecnologicas">ACTIVO-Div.Proyectos e Innovaciones Tecnologicas</option>

		</select>
	</div>
	<input type="submit" value="Registrar" class="btn btn-success col-md-3 offset-md-5 btn-lg">
	<a href="index.php" class="btn btn-danger btn-lg col-md-3 offset-md-5" style="margin-top: 1%;" >Buscar</a>
</form>
</div>
</body>
</html>