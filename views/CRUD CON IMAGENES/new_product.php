<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

   <div class="container">
    <br> 
    <h1>NUEVO PRODUCTO</h1>
    <br>
   <form action="./AgregarProducto.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre producto</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="Name_product">
            <div id="emailHelp" class="form-text">hola</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Precio</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="Price_Name">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">cantidad</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="Product_amount">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="Product_Image">
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-info" href="./index.php">Cancelar</a>
    </form>
   </div>
</body>

</html>