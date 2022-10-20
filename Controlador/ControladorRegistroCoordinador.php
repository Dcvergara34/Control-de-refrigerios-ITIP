<?php
require_once('../Modelo/clsCoordinador.php');
if (isset($_POST) && !empty($_POST)){
$id=$_POST['txtId'];
$nombre =$_POST['txtNombre'];
$apellido =$_POST['txtApellido'];
$correo =$_POST['txtEmail'];
$telefono =$_POST['txtTelefono'];
$oficina=$_POST['txtOficina'];
$estado =$_POST['txtEstado'];

if($id){
$objUsuario=new Coordinador();
$objUsuario->setId($id);
$objUsuario->setNombre($nombre);
$objUsuario->setApellido($apellido);
$objUsuario->setCorreo($correo);
$objUsuario->setTelefono($telefono);
$objUsuario->setOficina($oficina);
$objUsuario->setEstado($estado);

echo $objUsuario->getId()."<br>";
echo $objUsuario->getNombre()."<br>";
echo $objUsuario->getApellido()."<br>";
echo $objUsuario->getCorreo()."<br>";
echo $objUsuario->getTelefono()."<br>";
echo $objUsuario->getOficina()."<br>";
echo $objUsuario->getEstado()."<br>";

$objUsuario->registroCoordinador();
}
else{
    header('Location: ../Vistas/FormRegistroCoordinador.php?mensaje=errorclave');
}
}
?>
