<!DOCTYPE html>
<html>

<head>
    <title>Editar Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php require 'views/menu.php'; ?>
    <div class="container">


        <form action="http://localhost:8083/products/editarProducto/<?php echo $this->products->id; ?>" method="post"
            enctype="multipart/form-data">
            <div class="form-group">

                <div class="row">
                    <div class=" col-xs-12 col-sm-2  col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre"
                            value="<?php echo $this->products->nombre; ?>" placeholder="Ingrese nombre de producto">
                    </div>

                    <div class=" col-xs-12 col-sm-2  col-md-6">
                        <label for="referencia">Referencia</label>
                        <input type="text" name="referencia" value="<?php echo $this->products->referencia; ?>"
                            class="form-control">
                    </div>
                    <div class=" col-xs-12 col-sm-2  col-md-6">
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" value="<?php echo $this->products->precio; ?>"
                            class="form-control">
                    </div>
                    <div class=" col-xs-12 col-sm-2  col-md-6">
                        <label for="peso">Peso</label>
                        <input type="number" name="peso" value="<?php echo $this->products->peso; ?>"
                            class="form-control">
                    </div>
                    <div class=" col-xs-12 col-sm-2  col-md-6">
                        <label for="categoria">Categoria</label>
                        <input type="text" name="categoria" value="<?php echo $this->products->categoria; ?>"
                            class="form-control">
                    </div>
                    <div class=" col-xs-12 col-sm-2  col-md-6">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" name="stock"
                            value="<?php echo $this->products->stock; ?>" placeholder="Digita Stock">
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class=" col-xs-12 col-sm-12  col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">Editar</button>
                </div>
            </div>
    </div>
    </form>
    </div>

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