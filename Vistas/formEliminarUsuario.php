<?php
	//include('privilegios.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Aplicaciones/css/consultas.css">
    <link rel="stylesheet" href="../Aplicaciones/css/estilosformularios.css">
    <link rel="stylesheet" href="../Aplicaciones/css/consulta.css">
    <title>Consulta Usuario</title>
</head>
<body>
<div class="sidebar">
        <a href="Menu.php">Menu principal</a>
        <a href="FormRegistroUsuario.php" class="active">Usuarios</a>
        <a href="#">Auxiliar</a>
        <a href="#">Coordinador</a>
        <a href="#">Curso</a>
        <a href="#">Refrigerio</a>
    </div>
	<div class="content">
		<h3>Bienvenido al Sistema: <?php //echo $usuario; ?></h3>
		<!--<h4>Cargo: <?php echo $tipo; ?></h4>-->
		<a href="menu.php">Regresar </a> 

		<h4>Formulario de eliminación de usuarios</h4>
		<?php
		if ($_GET) {
			$mensaje=$_GET['mensaje'];
			if ($mensaje=='usuarioigual') {
				echo "<div class='alert alert-danger'>No se puede eliminar al usuario que está en sesión</div>";
			}else{
				if ($mensaje=='incorrecto') {
					echo "<div class='alert alert-danger'>No se puede eliminar al usuario debido a restricciones en la base de datos</div>";
				}else{
					echo "<div class='alert alert-success'>Usuario Eliminado Correctamente</div>";
				}
			}
		}
		?>

		<form method="POST" action="../Controlador/controlEliminarUsuario.php">
		<div class="form-group">
			
			<label>Nombre de Usuario</label>
			<input type="text" maxlength="32" required name="txtNombre" class="form-control">
			
			<br>
			<input type="submit" name="btnEliminarUsuario" value="Eliminar Usuario" class="btn btn-primary" onclick="return alerta();">
		</div>
			
		</form>
	</div>

<script type="text/javascript">
	function alerta(){
		var opcion=confirm("Está seguro de que desea eliminar al usuario?");
		return opcion;
	}
</script>	
</body>
</html>