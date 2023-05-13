<?php
include( "conexion.php");
 $con = conectar();

 $idProducto=$_POST['id_Producto'];
 $Nombre=$_POST['Nombre'] ;
 $Stock=$_POST['Stock'] ;
 $Descripcion=$_POST['Descripcion'];
 $PrecioVenta=$_POST['Precio_de_la_venta'];

 $sql="INSER INTO Producto VALUES('$idProducto','$Nombre','$Stock','$Descripcion','$PrecioVenta') ";
 $_query= mysqli_query($con,$sql);

 if($query){
    header("location: Producto.php");
 }  else{

 }   ?>