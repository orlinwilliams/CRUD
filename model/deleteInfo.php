<?php
require_once("connection.php");

$id=$_POST["id"];
$requestDB= new connectionDB();
if(!empty($id)){
    $consult="delete from Item where num_item_pk='$id'";
    if($query=$requestDB->query($consult)){
        echo "Se elimino el registro ";
    }


}
else{
    echo "FALTA ID";
}

$requestDB->close();
