<?php
require_once('../Modelo/clsCursos.php');
//La función isset() nos permite evaluar si una variable esta definida o no
//&& operador AND (y) 
if (isset($_POST) && !empty($_POST)){
$id=$_POST['txtId'];
$sede =$_POST['txtSedes'];
$cantidad =$_POST['txtAlumnos'];
$director =$_POST['txtDirector'];
$estado =$_POST['txtEstado'];

if($id){
    //Enviar las variables a la clase con el metodo set de cada variable
    $objUsuario=new Cursos();
    //Enviar los datos a la clase
    $objUsuario->setId($id);
    $objUsuario->setSede($sede);
    $objUsuario->setCantidad($cantidad);
    $objUsuario->setDirector($director);
    $objUsuario->setEstado($estado);
    //Verficar que los datos lleguen a la clase
    echo $objUsuario->getId()."<br>";
    echo $objUsuario->getSede()."<br>";
    echo $objUsuario->getCantidad()."<br>";
    echo $objUsuario->getDirector()."<br>";
    echo $objUsuario->getEstado()."<br>";
    //Invocar el metodo de registro
    $objUsuario->registroCursos();
}
else{
    header('Location: ../Vistas/FormRegistroCursos.php?mensaje=errorclave');
}
}
?>