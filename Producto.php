<?php 

include( "conexion.php");
$con = conectar();
$sql = "SELECT * FROM Producto";
$query=mysqli_query($con,$sql);
 ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Producto</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingrese Producto</h1>
                <form action="insertar.php" method="POST">
                <input type="text"class="form-control mb-3" name="Nombre" placeholder="Nombre del producto">
                <input type="text"class="form-control mb-3" name="Stock" placeholder="Stock">
                <input type="text"class="form-control mb-3" name="Descripcion" placeholder="Descripcion del producto">
                <input type="text"class="form-control mb-3" name="Precio_de_venta" placeholder="Precio de venta">
                
                <input type="submit" class="btn btn-primary"> <br><br>

                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Stock</th>
                            <th>Descripcion</th>
                            <th>Precio de venta</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
?>
                        <tr>
                            <th><?php echo $row['id_Producto']?></th>
                            <th><?php echo $row['Nombre']?></th>
                            <th><?php echo $row['Stock']?></th>
                            <th><?php echo $row['Descripcion']?></th>
                            <th><?php echo $row['Precio_de_venta']?></th>
                            <th><a href="Actualizar.php?id=<?php echo $row['id_Producto']?>" class="btn btn-info" >Editar</a> </th>
                            <th><a href="Delete.php?id=<?php echo $row['id_Producto']?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <form action="Buscar.php">
            <tr>
                <h3>Buscar Producto</h3>
                <td>Codgio</td>
                <br>
                <td><input type="nomber" name="Nombre" Value=""></td>
                <td><button type="sumit" class="btn btn-primary">buscar</td>
                
            </tr>
        </form>
    </div>
</body>
</html>