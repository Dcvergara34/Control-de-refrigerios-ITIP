<?php
require_once('../Modelo/clsUsuario.php');
if ($_GET) {
	//capturar el nombre del usuario que se desea eliminar
	$nombre=$_GET['txtNombre'];
	//Capturar el nombre de usuario que esta en sesion
	session_start();
	$nombreSesion=$_SESSION["usuario"];

	if ($nombre==$nombreSesion) {
		header('Location: ../Vistas/nombreUsuario?mensaje=usuarioigual');
	}else{
		//crear un objeto de la clase
		$objUsuario= new Usuario();
		//enviar el nombre a la clase para que sea eliminado el usuario
		$objUsuario->setNombre($nombre);
		//INVOCAR EL METODO DE ELIMINACION
		$objUsuario->eliminarUsuarioTabla();
	}
}
?>