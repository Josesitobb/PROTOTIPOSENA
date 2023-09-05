<!-- en este documento se validad el login y se abre el inicio de sesion  -->


<?php

include('db.php');

// SE CAPTURAN LOS DATOS DEL FORMULARIO
$username=$_POST['usernamelog'];
$password=$_POST['passwordlog'];

// SE INICIA SESION


$consulta="SELECT * FROM `usuarios` WHERE  usuario_username='$username' and usuario_contraseña='$password'";

// "SELECT * FROM `usuarios` WHERE usuario =	usuarios_nombres='$username' and usuario_contraseña = '$passowrd'";

$resultados=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultados);


if($filas){
    session_start();
$_SESSION['username']=$username;
    header("location:../modules/admin/PAGINA ADMINISTRADOR/quixlab-bootstrap-main/theme/index.php");
}else{
    include("../modules/users/LOGIN/login-form-04/index.html");
   
    ?>

    <?php
  
}
mysqli_free_result($resultados);
mysqli_close($conexion)


?>