<?php
include('Cabezote.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="../Aplicaciones/css/estilosformularios.css">
    <link rel="stylesheet" href="../Aplicaciones/css/consulta.css">
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
    <div>
<form action="../Controlador/ControladorRegistroUsuario.php" method="post">   
<center><h3>Registro Usuario</h3></center>
<br>
<label for="">Nombres</label>
<input name="txtNombre" type="text" placeholder="Ingrese sus nombres" required />   
<label for="">Apellidos</label>     
<input name="txtApellido" type="text" placeholder="Ingrese sus apellidos" required />   
<label for="">Correo</label>    
<input name="txtEmail" type="email" placeholder="Ingrese su correo electrónico" required />
<label for="">Telefono</label>
<input name="txtTelefono" type="text" placeholder="Ingrese su telefono" required/>
<label for="">Direccion</label> 
<input name="txtDireccion" type="text" placeholder="Ingrese su direccion" required />
<label for="">Contraseña</label>    
<input name="txtClave" type="password" placeholder="Ingrese su contraseña" required />
<label for="">Confirmar contraseña</label>    
<input name="txtconfirmar" type="password" placeholder="Confirmar" required />
<label for="">Tipo usuario</label>  
<select name="txtrol" id="">
            <option value="Coordinador">Coordinador</option>
            <option value="Auxiliar">Auxiliar</option>
            <option value="Estudiante">Estudiante</option>
        </select> <br> <br>
<label for="">Estado usuario</label>    
<select name="txtEstado" id="">
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select> <br> <br>
<input type="submit" value="REGISTRAR" class="boton">
</form>  
</div>

<div class= "crud">
<a href="FormRegistroUsuario.php"> <button>Registrar</button></a>
<a href="FormEditarUsuario.php"><button>Actualizar</button> </a>
<a href="FormConsultaUsuario.php"><button>Consulta Gen</button> </a>
<a href="FormEditarUsuario.php"><button>Consulta Codigo</button> </a>
<a href="formEliminarUsuario.php"><button>Eliminar</button> </a>
<a href="reporteUsuario.php"><button>Reporte</button> </a>

</div>


</body>
</html>