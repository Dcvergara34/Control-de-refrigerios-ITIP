<?php
require_once('Cabezote.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Aplicaciones/css/consultas.css">
    <link rel="stylesheet" href="../Aplicaciones/css/consulta.css">
    <title>Consulta Usuario</title>
</head>
<body>

 <div class="regreso">
<a href="menu.php" >Regresar </a> </div>
    <div class="content">
   <br>
        <h3>Gestion de usuarios</h3> <br>
        <table class="table table-bordered">
            <tr>
                <th>Codigo</th>
                <th>Nombre usuario</th>
                <th>Apellido usuario</th>
                <th>Correo usuario</th>
                <th>Telefono usuario</th>
                <th>Direccion usuario</th>
                <th>Password</th>
                <th>Rol</th>
                <th>Operación</th>
            </tr>

                <?php
                require_once('../Modelo/clsUsuario.php');
                $objeto=new Usuario();
                $filas=$objeto->consultaUsuario();
                if($filas!=null){
                foreach ($filas as $fila) {
                ?>
            <tr>
                <td> <?php echo $fila['idUsuario'];?> </td>
                <td> <?php echo $fila['nombreUsuario'];?> </td>
                <td> <?php echo $fila['apellidoUsuario'];?> </td>
                <td> <?php echo $fila['correoUsuario'];?> </td>
                <td> <?php echo $fila['telefonoUsuario'];?> </td>
                <td> <?php echo $fila['direccionUsuario'];?> </td>
                <td> <?php echo $fila['passwordUsuario'];?> </td>
                <td> <?php echo $fila['rolUsuario'];?> </td>

                <td>
                    <a href="../Controlador/controlConsultarUsuario2.php?Id=<?php echo $fila['idUsuario'];?>" class="btn btn-primary">Editar</a>
                    <a href="../Controlador/controlEliminarUsuarioTabla.php?txtNombre=<?php echo $fila['nombreUsuario'];?>" class="btn btn-danger" onclick="return alerta();">Eliminar</a>
				</td>
                </td>
            </tr>
        <?php    
        }
        }
        ?>
        </table>
    </div>
</body>
</html>