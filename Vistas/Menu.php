<?php
//require_once('../Modelo/Conexion.php');
include('Cabezote.php')
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" contenr="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu principal</title>
        <link rel="stylesheet" href="../Aplicaciones/css/estilos.css"> 
    </head>
    <body>
        <h1>Bienvenidos Sistemas De Información Control De refrigerios</h1>


<form class="botones" action="">
    <input class="button1" type="button" value="Usuario" onClick="window.location.href='FormRegistroUsuario.php'"> 
    <input class="button2" type="button" value="Coordinador" onClick="window.location.href='FormRegistroCoordinador.php'"> 
    <input class="button3" type="button" value="Auxiliar" onClick="window.location.href='FormRegistroAuxiliar.php'">
    <input class="button4" type="button" value="Curso" onClick="window.location.href='FormRegistroCursos.php'">
    <input class="button5" type="button" value="Refrigerio" onClick="window.location.href='FormRefrigerio.php'">
</form>
<br>
<img src="../Aplicaciones/Imagenes/Menu.png" alt="" width="60%" heigth="">
    </body>
    </html>