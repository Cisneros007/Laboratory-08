<?php 
include( "conexion.php");
$con = conectar();

$idProducto=$_GET['id_Producto'];

$sql="DELETE FROM Producto where id_Producto='$idProducto'";
$query=mysqli_query($con,$sql);

  if($query){
    header("Location: Producto.php");
  }