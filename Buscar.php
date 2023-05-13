<?php

include( "conexion.php");
 $con = conectar();

 $idProducto = $_GET['id_producto'];
 $sql = " SELECT * FROM  Producto where idProducto='{$idProducto}'"; 
 ?>

  <table>
<?php
while(mysqli_fetch_array($resultados)){
    ?>
    <tr>
        <th><?php echo $row['id_Producto']?></th>
        <th><?php echo $row['Nombre'] ?> </th>
        <th><?php echo $row['Stock']?></th>
        <th><?php echo $row['Descripcion']?></th>
        <th><?php echo $row['Precio_de_venta']?></th>
    </tr>
    <?php
}
    ?>
  </table>