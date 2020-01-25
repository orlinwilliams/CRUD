<?php
require_once("connection.php");
$id=$_POST["id"];
$nombre =$_POST["nombre"];
$tipeArticle=$_POST["tipeArticle"];
$precioArticle=$_POST["precioArticle"];

$requestDB=new connectionDB();

if(!empty($id)||!empty($nombre)||!empty($tipeArticle)||!empty($precioArticle)){
    $consult="update Item set txt_nombre='$nombre',txt_tipoProducto='$tipeArticle',num_precioUnitario='$precioArticle'
    where num_item_pk= '$id'";

    if($query=$requestDB->query($consult)){
        echo "CHANGE";
    }
}   
else{
    echo "ERROR";
}