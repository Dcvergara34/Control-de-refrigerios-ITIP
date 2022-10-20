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
</head>
<body>
    <div>
<form action="formulario-contacto.php" method="post">   
<h3>Registro Auxiliar</h3>
<br>
<label for="">Codigo Auxliar</label>
<input name="txtId" type="number" placeholder="Ingrese su codigo" required />
<label for="">Nombres</label>
<input name="txtNombre" type="text" placeholder="Ingrese sus nombres" required />   
<label for="">Apellidos</label>     
<input name="txtApellido" type="text" placeholder="Ingrese sus apellidos" required /> 
<label for="">Dirección</label>
<input type="text" name="txtDireccion" placeholder="Ingrese su dirección">
<label for="">Telefono</label>
<input type="number" name="txttelefono" placeholder="Ingrese su telefono">
<label for="">Correo</label>    
<input name="txtEmail" type="email" placeholder="Ingrese su correo electrónico" required />
<label for="">Curso</label>
<input type="number" name="txtCurso" placeholder="Ingrese el curso">
<label for="">Jornada</label>  
<select name="jornada" id="">
            <option value="">Mañana</option>
            <option value="">Tarde</option>
        </select> <br> <br>
<label for="">Estado usuario</label>    
<select name="Estado" id="">
            <option value="">Activo</option>
            <option value="">Inactivo</option>
        </select> <br> <br>
<input type="button" value="ENVIAR" class="boton">
</form>  
</div>
</body>
</html>