<?php 
require_once('../Modelo/clsUsuario.php');
// La función isset() nos permite evaluar si una variable está definida o no
if (isset($_POST) && !empty($_POST)) {
	$nombre =$_POST['txtNombre'];
	$apellido =$_POST['txtApellido'];
	$correo =$_POST['txtEmail'];
	$telefono =$_POST['txtTelefono'];
	$direccion =$_POST['txtDireccion'];
	$password =$_POST['txtClave'];
	$confirmar=$_POST['txtconfirmar'];
	$rol =$_POST['txtrol'];
	$estado =$_POST['txtestado'];

	// traigo la variable de session codigoU y la muestro
	session_start();
//verificacion para evitar errores	 
	$id = $_SESSION["codigoU"];
	//echo $_SESSION["codigoU"]."<br>";
	// 1: echo $nombre."<br>";
	//echo $tipo."<br>";
	//echo $clave."<br>";
	//echo $confirmacion."<br>";
	
	
	//crear el objeto
	$objUsuario= new Usuario();
	if($password==$confirmar){
		//Enviar las variables a la clase con el metodo set de cada variable
		$objUsuario=new usuario();
		//Enviar los datos a la clase
		$objUsuario->setId($id);
		$objUsuario->setNombre($nombre);
		$objUsuario->setApellido($apellido);
		$objUsuario->setCorreo($correo);
		$objUsuario->setTelefono($telefono);
		$objUsuario->setDireccion($direccion);
		$objUsuario->setPassword($password);
		$objUsuario->setRol($rol);
		$objUsuario->setEstado($estado);
		//Verficar que los datos lleguen a la clase
		echo $objUsuario->getId()."<br>";
		echo $objUsuario->getNombre()."<br>";
		echo $objUsuario->getApellido()."<br>";
		echo $objUsuario->getCorreo()."<br>";
		echo $objUsuario->getTelefono()."<br>";
		echo $objUsuario->getDireccion()."<br>";
		echo $objUsuario->getPassword()."<br>";
		echo $objUsuario->getRol()."<br>";
		echo $objUsuario->getEstado()."<br>";

	//Invocar el metodo de modificacion
	$objUsuario->editarUsuario();


   }else{
   	header('Location: ../Vistas/formEditarUsuario.php?mensaje=errorclave');
   }

	
	
}

 ?>