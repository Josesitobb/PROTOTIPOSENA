<?php



include("./db_register.php");
// RESIVIR DATOS
$usernamereg=$_POST['usernamereg'];
$emailreg=$_POST['emailreg'];
$passwordreg=$_POST['passwordreg'];
// CONSULTA PARA INSENTAR

$insert="INSERT INTO `usuarios`( `usuarios_nombres`, `usuario_contraseña`, `usuario_correo`, `ROLES_IdROLES`) VALUES ('$usernamereg','$passwordreg','$emailreg','1')";


// VERIFICAR CONSULTA USUARIOS
$verify_username= mysqli_query($conexion,"SELECT * FROM `usuarios` WHERE `usuarios_nombres` ='$usernamereg'");
if(mysqli_num_rows($verify_username)>0){
    echo '<script>

    alert("USUARIO YA ESTA EN USO GEI")
    window.history.go(-1);
    </script>
    
    ';
    exit;
}

// VERIFICAR CONSULTA CORREOS
$verify_correos= mysqli_query($conexion,"SELECT * FROM `usuarios` WHERE `usuario_correo` ='$emailreg'");
if(mysqli_num_rows($verify_correos)>0){
    echo '<script>

    alert("CORREO YA ESTA EN USO GEI")
    window.history.go(-1);
    </script>
    
    ';
    exit;
}


// EJECUTAR CONSULTA

$result = mysqli_query($conexion,$insert);

if(!$result){
    echo"ERRO ";
}else{
    echo '<script>

    alert("usuario registrado");
    window.location.replace("../../modules/company/PAGINA INICIAL/ice-cream-shop-website-template/index.html");
    // window.history.go(-1);
    </script>
    
    ';
}

// CERRAR LA CONEXION PORQUE SE ENTRAN LOS LADRONES
mysqli_close($conexion);
?>

