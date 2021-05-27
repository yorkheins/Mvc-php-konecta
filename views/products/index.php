<?php

?>

<!DOCTYPE html>
<html>

<head>
    <title>Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php require 'views/menu.php'; ?>
    <div class="container">
        <div class="jumbotron">
            <a href="http://localhost:8083/products/new/" class="btn btn-success">Nuevo Producto</a>
            <h1 class="display-4">Bienvenidos al Sistema de información de inventarios</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Fecha de Creacion</th>
                </tr>
            </thead>
            <tbody>
                <?php //var_dump( $this->wos); 
                include_once 'models/product.php';
                foreach ($this->products as $row) {
                    $letra = new product();
                    $letra = $row;
                    //echo $letra->nombre;
                    $id = $letra->id;
                    $nombre = $letra->nombre;
                    $referencia = $letra->referencia;
                    $precio = $letra->precio;
                    $peso = $letra->peso;
                    $categoria = $letra->categoria;
                    $stock = $letra->stock;
                    $fecha_creacion = $letra->fecha_creacion;

                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $nombre; ?></td>
                    <td><?php echo $referencia; ?></td>
                    <td>$<?php echo $precio; ?></td>
                    <td><?php echo $peso; ?>gr</td>
                    <td><?php echo $categoria; ?></td>
                    <td><?php echo $stock; ?></td>
                    <td><?php echo $fecha_creacion; ?></td>
                    <td><a href="http://localhost:8083/products/update/<?php echo $id; ?>"
                            class="btn btn-warning">Editar</a></td>
                    <td>
                        <a href="http://localhost:8083/products/delete/<?php echo $id; ?>"
                            class="btn btn-danger">Eliminar</a>
                    </td>
                    <td><a href="http://localhost:8083/ventas/new/<?php echo $id; ?>"
                            class="btn btn-success">Comprar</a></td>
                </tr>
                <?php

                }

                ?>
            </tbody>
        </table>
        <?php require 'views/footer.php'; ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>