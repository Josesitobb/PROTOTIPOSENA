<?php
include("db.php");

$id=$_REQUEST['id'];

$sql="DELETE FROM `productos` WHERE idPRODUCTOS = $id";

$Resultado= $conn ->query($sql);


if($Resultado){
    header("location:indexproductos.php");
}else{
    echo "no se elimino f";
}

?>