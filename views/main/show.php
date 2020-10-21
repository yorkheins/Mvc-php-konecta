<!DOCTYPE html>
<html>
<head>
	<title>Cliente <?php echo $this->show_user["id"];?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <?php require 'views/menu.php'; ?>	 
<div class="container">
	<h1>ID del usuario: <?php echo $this->show_user["id"];?></h1> 
  <form action="/action_page.php" class="was-validated">
  <div class="form-group">
    <label for="uname">Nombre:</label>
    <input type="text" class="form-control" value="<?php echo $this->show_user["nombre"];?>" placeholder="Enter username" name="nombre" disabled>
  </div>
  <div class="form-group">
    <label for="uname">Apellido:</label>
    <input type="text" class="form-control" value="<?php echo $this->show_user["apellido"];?>" placeholder="Enter username" name="apellido" disabled>
  </div>
  <div class="form-group">
    <label for="uname">Correo:</label>
    <input type="text" class="form-control" value="<?php echo $this->show_user["correo"];?>" placeholder="Enter username" name="correo" disabled>
  </div>
  <div class="form-group">
    <label for="uname">Teléfono:</label>
    <input type="text" class="form-control" value="<?php echo $this->show_user["telefono"];?>" placeholder="Enter username" name="telefono" disabled>
  </div>
  <div class="form-group">
    <label for="uname">Fecha de creación del usuario:</label>
    <input type="text" class="form-control" value="<?php echo $this->show_user["fecha_creacion"];?>" placeholder="Enter username" name="uname" disabled>
  </div>
</form>
</div>
<?php require 'views/footer.php'; ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>