<?php
include( "conexion.php");
 $con = conectar();

 $idProducto=$_POST['id_Producto'];
 $Nombre=$_POST['Nombre'] ;
 $Stock=$_POST['Stock'] ;
 $Descripcion=$_POST['Descripcion'];
 $PrecioVenta=$_POST['Precio_de_la_venta'];

 $sql="UPDATE inventario SET Nombre='$Nombre',Stock='$Stock',Precio_de_venta='$PrecioVenta', Descripcion='$Descripcion' where id_productos='$idProducto";

 if($query){
    header("location: Producto.php");
 }
 ?>