<?php
include "db.php";

if(isset($_POST['Enviar'])){

    $Nombre=$_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $Username=$_POST['Username'];
    $Correo=$_POST['Correo'];
    $Contraseña=$_POST['Contraseña'];
    $IdRol=$_POST['IdRol'];
    
    // $sql="INSERT INTO `usuarios`(`id_usuarios`, `Nombre_usuarios`, `Apellido_usuarios`, `IdRol`, `contraseña`, `correo`) VALUES (NULL,'$Nombre','$Apellido',NULL,'$Contraseña','$Correo')";
    $sql="INSERT INTO `usuarios`(`idUSUARIOS`, `usuarios_nombres`, `usuario_apellido`, `usuario_username`, `usuario_contraseña`, `usuario_correo`, `ROLES_IdROLES`) VALUES (NULL,'$Nombre','$Apellido','$Username','$Contraseña','$Correo','$IdRol')";

    $result = mysqli_query($conn,$sql);
    
    if($result){

        header("Location:index.php?msg=New record created successfully");
    }
    else{
        echo "fallido".mysqli_error($conn);
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous">
<!-- FONS -->
    <title>Maryuri</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#c6e5d9">
        AÑADIR NUEVO USUARIO
</nav>

<div class="container">
    <div class="text-center mb-4">
        <h3>AÑADIR NUERO USUARIO</h3>
        <P class="text-muted">Porfa rellene toda las informacion para que pueda ingresar un usuario</P>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
            <div class="col">
                <label class="form-label" for="">Nombre</label>
                <input type="text" class="form-control" name="Nombre" placeholder="Pepito">
            </div>

            <div class="col">
                <label class="form-label" for="">Apellido</label>
                <input type="text" class="form-control" name="Apellido" placeholder="Perez">
            </div>

            <div class="col">
                <label class="form-label" for="">Username</label>
                <input type="text" class="form-control" name="Username" placeholder="Example1234">
            </div>

        </div>
        <div class="mb-3">
        <label class="form-label" for="">Correo</label>
                <input type="text" class="form-control" name="Correo" placeholder="Pepitoperez@exaple.edu.co">
        </div>
        <div class="col">
        <label class="form-label" for="">Contraseña</label>
                <input type="text" class="form-control" name="Contraseña" placeholder="exmple:123456789abc">
        </div>

        <div class="col">
        <label class="form-label" for="">Idrol</label>
                <input type="text" class="form-control" name="IdRol" placeholder="exmple:1=empleado,2=cliente">
        </div>
        <div >
            <br>
        <button type="submit" class="btn btn-success margin=5px" name="Enviar"> Enviar</button>
        <a href="index.php" class="btn btn-danger"> Cancelar</a>
        </div>

        </div>
    
       

        </fomr>
        </div>
</div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>