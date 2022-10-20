<?php
require_once ('Cabezote.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Aplicaciones/css/estiloslogin.css">
    <link rel="stylesheet" href="../Aplicaciones/css/login.css">
    <title>Login</title>
</head>
<body>

<?php
if ($_GET){
    $mensaje=$_GET['mensaje'];

    if($mensaje=='errorclave') {
        echo "<div class='alert-danger'> <font color='red'> Contraseña o usuario incorrectos </div></font>";
    }
    else {
        if($mensaje=='Okey'){
            echo "<div class='alert alert-succes'> El usuario ingreso correctamente </div></font>";
        }
    }
}

?>

<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="../Controlador/ControladorLogin.php" method="post" >
            <i class="login__icon fas fa-user"> <b></i></b>
				<h3>Login</h3>
				<div class="login__field">
					<i class="login__icon fas fa-user"> <b></i></b>
                    ID:
					<input type="text" class="login__input"  name="txtId" placeholder="ID usuario">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"> <b></i> </b>
                    Clave:
					<input type="password"  name="txtClave" class="login__input" placeholder="Password" required>
				</div >
                <div class="login__field">
                     <i class="login__icon fas fa-lock"> <b></i> </b>
                Rol:
               <select name="rol" id="" class="login__input">
                <option value="">Administrador</option>
                <option value="">Auxiliar</option>
                <option value="">Estudiante</option>
                </select>
                </div>    
				<button class="button login__submit">
					<span class="button__text">Inicio Sesión</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>			
				<button class="button login__submit">
					<span class="button__text"> <a href="FormRegistroUsuario.php">REGISTRARSE</a> </span>
				</button>	
			
			<div class="social-login">
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>	
        </form>	
	</div>
</div>


   
</body>
</html>



