<?php session_start();
$ruta = "http://localhost:8002/";
       ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo $ruta;?>">Xpectrum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $ruta;?>">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav mr-auto">

      <?php if (isset($_SESSION['login'])) {
        ?>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['datos'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" ref="#" data-toggle="modal" data-target="#mostrarModal">ver token</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo $ruta;?>login/logout">Cerrar Sesión</a>
        </div>
      </li>
        <?php
       
      }else{
        ?>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo $ruta;?>login">Iniciar Sesión</a>
          
        </div>
      </li>
     <?php } ?>
 




     
    </ul>
  </div>
</nav>

<div class="modal fade" id="mostrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Su Token</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Este token presentado acontinuación es el valido para su sesión.</p>
        <p><?php echo $_SESSION['token']; ?></p>
        <form action="http://localhost:8002/users/read_modal" method="post" class="was-validated">
        </form>
      </div>
      
    </div>
  </div>
</div>
<br>