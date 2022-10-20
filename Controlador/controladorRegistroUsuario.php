<?php
require_once('../Modelo/clsUsuario.php');
//La función isset() nos permite evaluar si una variable esta definida o no
//&& operador AND (y) 
if (isset($_POST) && !empty($_POST)){
$id=$_POST['txtId'];
$nombre =$_POST['txtNombre'];
$apellido =$_POST['txtApellido'];
$correo =$_POST['txtEmail'];
$telefono =$_POST['txtTelefono'];
$direccion =$_POST['txtDireccion'];
$password =$_POST['txtClave'];
$confirmar=$_POST['txtconfirmar'];
$rol =$_POST['txtrol'];
$estado =$_POST['txtEstado'];

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
    //Invocar el metodo de registro
    $objUsuario->registroUsuario();
}
else{
    header('Location: ../Vistas/FormRegistroUsuario.php?mensaje=errorclave');
}
}
?>