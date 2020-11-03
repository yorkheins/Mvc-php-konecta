<!DOCTYPE html>
<html> 
<head>
	<title>new</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  	<?php require 'views/menu.php'; ?>
<div class="container">
	<h1>Lista de Usuarios</h1> 

<?php 
  if(empty($this->wos['users'])){
      echo "<p>no está autorizado</p>";
     }else{
 ?>
<a href="http://localhost:8002/users/create" class="btn btn-success">Nuevo</a>
<?php if($this->mensaje == "eliminado"){
      echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">¡Registro Eliminado con éxito!</h4>
</div>';
     }elseif($this->mensaje == "actualizado"){
      echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">¡Registro Actualizado con éxito!</h4>
</div>';
     } ?>
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
      $total = count($this->wos['users']);
     for ($i=0; $i < $total; $i++) { 
          $nombre = $this->wos['users'][$i]["nombre"];
          $apellido = $this->wos['users'][$i]["apellido"];
          $id = $this->wos['users'][$i]["id"];
         $correo = $this->wos['users'][$i]["correo"];
          $telefono = $this->wos['users'][$i]["telefono"];
          $fecha_creacion = $this->wos['users'][$i]["fecha_creacion"];
          ?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $apellido ?></td>
            <td><?php echo $correo;?></td>
            <td><a href="http://localhost:8002/users/show/<?php echo $id;?>" class="btn btn-primary">ver</a></td>
            <td><a href="http://localhost:8002/users/update/<?php echo $id;?>" class="btn btn-warning">Editar</a></td>
            <td>
               <a href="http://localhost:8002/users/delete/<?php echo $id;?>" class="btn btn-danger">Eliminar</a> 
            </td>
           </tr>
           <?php
         }
     }
     
      ?>
    </tbody>
  </table>
</div>
<!---->
<!---->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>