<?php
include("conexion.php");

$conexion = conexion();

$id = $_POST["id"];
$item = $_POST["item"];
$cantidad = $_POST["cantidad"];
//echo $id . " " . $item . " " . $cantidad;

$sql = "UPDATE lista SET item='$item', cantidad='$cantidad' WHERE id=$id";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: index.php");
}


?>




