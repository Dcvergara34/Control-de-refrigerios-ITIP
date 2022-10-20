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
            echo "<div class='alert alert-succes'> El usuario fue registrado correctamente </div></font>";
        }
        else{
            echo "<div class='alert alert-succes'> La clave y la confirmacion no coinciden, verifique y reintente </div></font>";
        }
    }
}

?>

<form action="../Controlador/ControladorRegistroCoordinador.php" method="post">   
<h3>Registro Coordinador</h3>
<br>
<label for="">Codigo Coordinador</label>
<input name="txtId" type="number" placeholder="Ingrese su codigo" required />
<label for="">Nombres</label>
<input name="txtNombre" type="text" placeholder="Ingrese sus nombres" required />   
<label for="">Apellidos</label>     
<input name="txtApellido" type="text" placeholder="Ingrese sus apellidos" required />   
<label for="">Telefono</label>
<input name="txtTelefono" type="number"placeholder="Ingrese su ingrese su telefono" required />
<label for="">Correo</label>    
<input name="txtEmail" type="email" placeholder="Ingrese su correo electrónico" required /> 
<label for="">Oficina</label>
<select name="txtOficina" id="">
            <option value="">501</option>
            <option value="">502</option>
            <option value="">503</option>
        </select> <br> <br>
<label for="">Estado Coordinador</label>    
<select name="txtEstado" id="">
            <option value="">Activo</option>
            <option value="">Inactivo</option>
        </select> <br> <br>
<label for="">Id Usuario</label>    
<select name="txtidUsuario" id="">
    <?php
        require_once('../Modelo/clsUsuario.php');
        $objeto= new Usuario();
        $filas=$objeto->consultarTodos();
    ?>
        <?php
        foreach ($filas as $opciones):
        ?>

        <option value="<?php echo $opciones['idUsuario']?>"></option>
        <?php endforeach ?>
</select>
        <input type="submit" value="REGISTRAR" class="boton">
</form>  
</div>
</body>
</html>
