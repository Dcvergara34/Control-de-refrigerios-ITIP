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
<center><h3>Ingreso Refrigerios</h3></center>
<br>
<label for="">Codigo Refrigerio</label>
<input name="txtId" type="number" placeholder="Ingrese su codigo" required />
<label for="">Fecha</label>
<input type="date" name="txtfecha" id="">   
<label for="">Hora</label>
<input type="time" name="txthora" id="">     
<label for="">Tipo de refrigerio</label><br>
<input type="text" name="txttipo" placeholder="Ingrese el tipo de refrigerio">
<label for="">Cantidad refrigerios</label>
<input type="number" name="txtcantidad" placeholder="Ingrese la cantidad de refrigerios">
<label for="">Descripcion de el refrigerio</label>    
<input name="txtdescripcion" type="text" placeholder="Descripción del refrigerio" required />
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