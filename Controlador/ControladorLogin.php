
<?php
require_once('../Modelo/clsUsuario.php');

if (isset($_POST) && !empty($_POST)) {
    $id=$_POST['txtId'];
    $password =$_POST['txtClave'];
//Crear objeto de la clase
    $objUsuario=new usuario();
//Envia datos a la clase
    $objUsuario->setId($id);
//Claves Encriptadas
   // $objUsuario->setPassword(md5($clave));
    $objUsuario->setPassword($password);

//Verificar que los datos hayan llegado a la clase
   // echo "El usuario digitado es: ".$objUsuario->getNombre();
   // echo "La clave digitada fue:  ". $objUsuario->getPassword();

    if ($objUsuario->login()==true) {
        header('Location: ../Vistas/Menu.php?mensaje=Okey');
    }else{
       echo "error en la clave";
       header('Location: ../Vistas/FormLogin.php?mensaje=errorclave');
    }


}
?>