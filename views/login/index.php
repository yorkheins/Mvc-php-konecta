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
    <div class="row">
      <div class="col-md-4">
        
      </div>
      <div class="col-md-4">
      <form action="http://localhost:8002/login/ingresar" method="post" class="was-validated">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de Usuario</label>
    <?php 
    if (isset($this->user_no_valido['campo_user'])) {
        echo $this->user_no_valido['campo_user'];
    }else{
      ?>
      <input type="text" class="form-control" name="user" 
    value="<?php 
      if(isset($this->user_valido['user'])){
        echo $this->user_valido['user'];
      }
     ?>" aria-describedby="emailHelp" placeholder="Ingrese su usuario">
      <?php
    }
     ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
     <?php 
    if (isset($this->user_no_valido['campo_pass'])) {
        echo $this->user_no_valido['campo_pass'];
    }else{
      ?>
       <input type="password" class="form-control" name="pass" placeholder="Password">
      <?php
    }
     ?>
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
      </div>
      <div class="col-md-4">
        
      </div>
    </div>

</div>
<?php require 'views/footer.php'; ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>