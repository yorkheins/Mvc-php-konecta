<!DOCTYPE html>
<html> 
<head>
	<title>new</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  	<?php require 'views/menu.php'; ?>
<div class="container">
	<h1>Lista de Usuarios</h1> <a href="http://localhost:8002/main/create" class="btn btn-success">Nuevo</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      </tr>
    </thead>
    <tbody>
     <?php //var_dump( $this->wos); 
     $total = count($this->wos);
     for ($i=0; $i < $total; $i++) { 
          $nombre = $this->wos[$i]["nombre"];
          $apellido = $this->wos[$i]["apellido"];
          $id = $this->wos[$i]["id"];
         $correo = $this->wos[$i]["correo"];
          $telefono = $this->wos[$i]["telefono"];
          $fecha_creacion = $this->wos[$i]["fecha_creacion"];
          ?>
          <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $nombre ?></td>
            <td><?php echo $apellido ?></td>
            <td><?php echo $correo ?></td>
            <td><a href="http://localhost:8002/main/show/<?php echo $id;?>" class="btn btn-primary">ver</a></td>
            <td><a href="http://localhost:8002/main/update/<?php echo $id;?>" class="btn btn-warning">Editar</a></td>
            <td><a href="#" class="btn btn-danger">Eliminar</a></td>
           </tr>
           <?php
         }
      ?>
    </tbody>
  </table>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>