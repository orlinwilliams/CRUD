<?php
require_once("connection.php");

$requestDB = new connectionDB();
$nombre =$_GET["valor"];
$info="";

$consult="select *from Item where txt_nombre like '%$nombre%'";
if($query1=$requestDB->query($consult)){
    while($row=$query1->fetch_array()){
        $info.="<tr>";
        $id=$row["num_item_pk"];
        $info.="<td>".$row["txt_nombre"]."</td>";
        $info.="<td>".$row["txt_tipoProducto"]."</td>";
        $info.="<td>".$row["num_precioUnitario"]."</td>";
        $info.="<td>"."<button type='button' class='btn btn-outline-primary' onClick='modificar(".$id.")'>MODIFICAR</button></td>";
        $info.="<td>"."<button type='button' class='btn btn-outline-danger' id='delete' onClick='eliminar(".$id.")' >DELETE</button>
                "."</td>";
        
        $info.="</tr>";
    }

    echo $info;

}
else{
    echo "ERROR CONSULT";
}

$requestDB->close();
