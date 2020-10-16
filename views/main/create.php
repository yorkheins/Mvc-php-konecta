<!DOCTYPE html>
<html>
<head>
	<title>new</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Crud Xpectrum</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php //echo constant('url');?>main">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Usuarios
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php //echo constant('url');?>read">Ver Usuarios</a>
          <a class="dropdown-item" href="#">Nuevo Usuarios</a>
        </div>
      </li>

      </ul>
    </div>
  </nav>	
<div class="container">
	<h1>Lista de Usuarios</h1>
  <table class="table table-dark">
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