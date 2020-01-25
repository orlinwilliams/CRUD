<?php
require_once("connection.php");
$nombre =$_POST["nombre"];
$tipeArticle=$_POST["tipeArticle"];
$precioArticle=$_POST["precioArticle"];

$requestDB=new connectionDB();

sleep(0.5);
if( !empty($nombre)||!empty($nombre)||!empty($precioArticle)){
    $consult="insert into Item(txt_nombre,txt_tipoProducto,num_precioUnitario) 
    values('$nombre','$tipeArticle','$precioArticle')";

    if($query=$requestDB->query($consult)){
        echo "SAVED";

    }

    else{
        echo "ERROR";
    }
}
else{
    echo "ERROR";
}

$requestDB->close();



