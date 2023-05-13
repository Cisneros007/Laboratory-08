<?php

include( "conexion.php");
 $con = conectar();

 $id=$_GET['id'];

 $sql="SELECT * FROM Producto where id_Producto='$id'";
 $query=mysqli_query($con,$query);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <h1>Actualizar Producto </h1>
    <div class="container mt -5">
        <form action="update.php" method="POST">
            <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre del producto" value="<?php echo $row['Nombre']?>">
            <input type="text" class="form-control mb-3" name="Stock" placeholder="Stock" value="<?php echo $row['Stock']?>">
            <input type="text" class="form-control mb-3" name="Precio_de_venta" placeholder="Precio_de_venta" value="<?php echo $row['Precio_de_venta']?>">
            <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            
        </form>

    </div>
</body>
</html>