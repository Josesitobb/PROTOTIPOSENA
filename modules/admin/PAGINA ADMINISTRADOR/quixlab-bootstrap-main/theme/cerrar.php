<?php


session_start();
$varsesion=$_SESSION['username'];

if($varsesion == null || $varsesion=''){
    echo 'USTED INICIE SESION';
    die();
}

session_destroy();
header("Location:../../../../company/PAGINA INICIAL/ice-cream-shop-website-template/index.html");
require_once("")

?> 