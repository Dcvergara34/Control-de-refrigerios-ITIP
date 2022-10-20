<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Aplicaciones/css/consulta.css">
    <title>Document</title>
</head>
<body>

<div class="sidebar">
        <a href="Menu.php">Menu principal</a>
        <a href="FormRegistroUsuario.php" class="active">Usuarios</a>
        <a href="#">Auxiliar</a>
        <a href="#">Coordinador</a>
        <a href="#">Curso</a>
        <a href="#">Refrigerio</a>
    </div>

    <div class="content">
        <h3>Formulario de edición de datos Usuario</h3>
        <br>
        <form action="../Controlador/controlConsultarUsuario.php" method="post">
        <label for="">ID:</label>
        <input type="number" name="txtId" class="form-control" >
        <br><br>
        <input type="submit" name="btnConsultarUsuarios" value="Consultar" class="btn btn-primary">
        </form>

        <?php
       	if ($_GET){
            $mensaje=$_GET['mensaje'];
            //echo $mensaje;
            if($mensaje=='Invalido'){
                echo"No  hay  datos registrados para el codigo digitado, verifique y reintente";
            }else{
                if($mensaje=='errorclave'){
                echo "La clave y la confirmacion no coinciden, verifique y reintente";
                }else{
                    if($mensaje=='editaroL'){
                        echo "Datos madificados Correctamente";
                    }else{

                $nombre=$_GET['nombre'];
                $apellido=$_GET['apellido'];
                $correo=$_GET['correo'];
                $telefono=$_GET['telefono'];
                $direccion=$_GET['direccion'];
                $rol=$_GET['rol'];
                $estado=$_GET['estado'];
        ?>

        <br>
        <form action="../Controlador/controlEditarUsuario.php" method="post">
        <div class="form-group">
            <label for="">Nombre:</label>
            <input name="txtNombre" type="text" value="<?php echo $nombre; ?>"/><br><br> 
            <label for="">Apellido:</label>     
            <input name="txtApellido" type="text"value="<?php echo $apellido; ?>"/><br><br>    
            <label for="">Correo:</label>    
            <input name="txtEmail" type="email" value="<?php echo $correo; ?>"/><br><br> 
            <label for="">Telefono:</label>
            <input name="txtTelefono" type="text"value="<?php echo $telefono; ?>"/><br><br> 
            <label for="">Direccion:</label> 
            <input name="txtDireccion" type="text"value="<?php echo $direccion; ?>"/><br><br> 
            <label for="">Contraseña:</label>    
            <input name="txtClave" type="password" required /><br><br> 
            <label for="">Confirmar contraseña:</label>    
            <input name="txtconfirmar" type="password" required/><br><br> 
            <label for="">Rol usuario:</label> 
            <select name="txtrol" id="">
            <option <?php if($rol=='Coordinador'){echo "selected";} ?> >Coordinador</option>>
            <option <?php if($rol=='Auxiliar'){echo "selected";} ?> >Auxiliar</option>>
            <option <?php if($rol=='Estudiante'){echo "selected";} ?>>Estudiante</option>
            </select>
            <select name="txtestado" id="">
            <option <?php if($estado=='Activo'){echo "selected";} ?> >Activo</option>>
            <option <?php if($estado=='Inactivo'){echo "selected";} ?> >Inactivo</option>>
             </select>
            
            <br><br>
            <input type="submit" value="Modificar">
        </div>
        </form>
    <?php
                    }
                }
        }
    }
    ?>
    </div>
</body>
</html>
