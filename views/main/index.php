<?php 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php require 'views/menu.php'; ?>
	<div class="container">
<div class="jumbotron">
  <h1 class="display-4">Bienvenidos al Sistema de control de Clientes</h1>
  <p class="lead">A través de nuestra página, podrá conocer y administrar todas las configuraciones correspondientes a este sistema de control de clientes, todo debidamente validado por su token de seguridad.</p>
  <hr class="my-4">
  <p>Seleccione una de las Opciones que tenemos para usted:</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="http://localhost:8002/users/read_modal" role="button">Ver Usuarios</a>
    <!--<a class="btn btn-success btn-lg" href="http://crud.local.com:8002/main/solicitarToken" role="button">Generar token</a>-->

<!-- Modal para ver usuarios --> 
<!-- fin del Modal para ver usuarios -->
<!-- fin del Modal para ver usuarios -->
  </p>
</div>
</div>

<?php require 'views/footer.php';?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>