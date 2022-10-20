<?php
require_once('../Modelo/clsUsuario.php');

if (isset($_POST) && !empty($_POST)) {
    $id=$_POST['txtId'];

    $objUsuario=new usuario();
    $objUsuario->setId($id);

    //CREACION DE VARIABLE GLOBAL DE SESION CON EL CODIGO DE USUARIO
	session_start();
	$_SESSION["codigoU"]=$id;

    //Variables filas al controlador, se invoca el método

    $filas=$objUsuario->consultarPorCodigo();
    if ($filas==null) {
       header('Location: ../Vistas/formEditarUsuario.php?mensaje=Invalido');
    }else {
            foreach ($filas as $fila) {
                $nombre=$fila['nombreUsuario'];
                $apellido=$fila['apellidoUsuario'];
                $correo=$fila['correoUsuario'];
                $telefono=$fia['telefonoUsuario'];
                $direccion=$fila['direccionUsuario'];
                $rol=$fila['rolUsuario'];
                $estado=$fila['estadoUsuario'];
                echo $nombre. "<br>";
                echo $apellido. "<br>"; 
                echo $correo. "<br>";
                echo $telefono. "<br>";
                echo $direccion. "<br>";
                echo $rol. "<br>";
                echo $estado. "<br>";
                header('Location: ../Vistas/formEditarUsuario.php?mensaje=Correcto&nombre='.$nombre.'&apellido='.$apellido.'&correo='.$correo.'&telefono='.$telefono.'&direccion='.$direccion.'&rol='.$rol. '&estado='.$estado);
       }
    }


     
    //echo $objUsuario->getId();
}
   
?>
 