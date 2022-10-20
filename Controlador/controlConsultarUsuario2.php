<?php
	require_once('../Modelo/clsUsuario.php');
if ($_GET) {
	$id=$_GET['Id'];

	//DOY ACCESO A LAS VARIABLES DE SESION
	session_start();
	//CREAR UNA VARIABLE DE SESION CON EL VALOR DEL CODIGO PARA PODER UTILIZARLO EN EL CONTROLADOR DE EDITARUSUARIO
	$_SESSION['codigoU']=$id;


	$objUsuario= new Usuario();
	$objUsuario->setId($id);
	
	//echo $objUsuario->getId();
	
	//INVOCAR METODO PARA TRAER LA VARIABLE FILAS DE LA CLASE
	$filas=$objUsuario->consultarPorCodigo();
	//VALIDAR EL CASO EN QUE EL CODIGO NO EXISTA EN LA TABLA USUARIOS
	if ($filas==null) {
		header('Location: ../Vistas/formEditarUsuarioTabla.php?mensaje=incorrecto');
	}else{
		foreach ($filas as $fila) {
			$nombre =$fila['nombreUsuario'];
			$apellido =$fila['apellidoUsuario'];
			$correo =$fila['correoUsuario'];
			$telefono =$fila['telefonoUsuario'];
			$direccion =$fila['direccionUsuario'];
			$password =$fila['passwordUsuario'];
			$confirmar=$fila['txtconfirmar'];
			$rol =$fila['rolUsuario'];
			$estado =$fila['estadoUsuario'];

			
			echo $nombre."<br>";
			echo $apellido."<br>";
			echo $correo."<br>";
			echo $telefono."<br>";
			echo $direccion."<br>";
			echo $password."<br>";
			echo $rol. "<br>";
			echo $estado."<br>";
			//PASAR LAS VARIABLES AL FORMULARIO A TRAVÉS DEL ENLACE
			header('Location: ../Vistas/formEditarUsuarioTabla.php?mensaje=correcto&nombre='.$nombre.'&apellido='.$apellido.'&correo='.$correo.'&telefono='.$telefono.'&direccion='.$direccion.'&rol='.$rol. '&estado='.$estado);
		}
		
	}
}
?>