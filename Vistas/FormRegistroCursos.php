<?php
include('Cabezote.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinador</title>
    <link rel="stylesheet" href="../Aplicaciones/css/estilosformularios.css">
</head>
<body>
<?php
if ($_GET){
    $mensaje=$_GET['mensaje'];

    if($mensaje=='incorrecto') {
        echo "<div class='alert-danger'> <font color='red'> El codigo ya esta en uso </div></font>";
    }
    else {
        if($mensaje=='correcto'){
            echo "<div class='alert alert-succes'> El curso fue registrado correctamente </div></font>";
        }
        else{
            echo "<div class='alert alert-succes'> Los datos no coinciden, verifique y reintente </div></font>";
        }
    }
}

?>
    <div>
<form action="../Controlador/ControladorRegistroCursos.php" method="post">   
<h3>Cursos</h3>
<br>
<label for="">Curso</label>
<input name="txtId" type="number" placeholder="Ingrese su curso" required />
<label for="">Sedes</label>
<input name="txtSedes" type="text" placeholder="Ingrese su sede" required />   
<label for="">Alumnos</label>     
<input name="txtAlumnos" type="text" placeholder="Ingrese la cantidad de alumnos" required />   
<label for="">Director de curso</label>
<input name="txtDirector" type="text"placeholder="¿Quien es su director de curso?" required />
<label for="">Estado Curso</label>    
<select name="txtEstado" id="">
            <option value="">Activo</option>
            <option value="">Inactivo</option>
        </select> <br> <br>
<input type="submit" value="REGISTRAR" class="boton">

</form>  
</div>
</body>
</html>