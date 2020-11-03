<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript"></script>
	<title>Registro de Usuarios</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head> 
<body>
<?php require 'views/menu.php'; ?> 
<div class="container">
	<h1>Formulario de registro de Usuarios</h1>
  <?php if($this->mensaje == "true"){
    echo "<div class='alert alert-danger' role='alert'>
  <h4 class='alert-heading'>¡Campos vacios!</h4>
  <p>Parece que estas tratando de ingresar un valor vacio, debes llenar todos los campos.</p>
</div>";
  }elseif ($this->mensaje == "existe") {
    echo "<div class='alert alert-danger' role='alert'>
  <h4 class='alert-heading'>¡Registro ya existe!</h4>
  <p>El id que está tratando de ingresar ya existe entre nuestros registros, prueba ingresar otro id.</p>
</div>";
  }elseif ($this->mensaje == "registrado") {
    echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">¡Registro Agregado con éxito!</h4>
</div>';
  }
  ?>
  <form action="http://localhost:8002/users/new" method="post" class="was-validated">
  	<div class="form-group">
    <label for="uname">ID:</label>
    <input type="text" class="form-control" name="id" placeholder="Ingrese el ID" required>
  </div>
  <div class="form-group">
    <label for="uname">Nombre:</label>
    <input type="text" class="form-control" placeholder="Enter username" name="nombre">
  </div>
  <div class="form-group">
    <label for="uname">Apellido:</label>
    <input type="text" class="form-control" value="<?php echo $this->show_user["apellido"];?>" placeholder="Ingrese el Nombre" name="apellido" required>
  </div>
  <div class="form-group">
    <label for="uname">Correo:</label>
    <input type="email" class="form-control" value="<?php echo $this->show_user["correo"];?>" placeholder="Ingrese el Correo" name="correo" required>
  </div>
  <div class="form-group">
    <label for="uname">Teléfono:</label>
    <input type="text" class="form-control" value="<?php echo $this->show_user["telefono"];?>" placeholder="Ingrese el Teléfono" name="telefono" required>
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
<?php require 'views/footer.php'; ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>