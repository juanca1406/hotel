<?php 
    //requide_once
    //include_once
    //require_once "class/conexion.php";
    //$conexion = new conexion();
    require_once "class/registrar.php";
    $regis = new Registrar;
    if(isset($_POST['btnresgistrar'])){
        $regis->_SET("nombre", $_POST['txtnombre']);
        $regis->_SET("correo", $_POST['txtcorreo']);
        $regis->_SET("contraseña", $_POST['txtcontraseña']);
        $regis->_SET("fecha", date('d-m-y'));
        $res = $regis->registrarClientes();
        if($res == true){
            echo "Registro Exitoso";
        }else{
            echo "Error, al realizar e registro comuniquese con soporte xxxxxx";
        }  
    }
?>
<link rel="shortcut icon" href="imagen/hotel.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <title>Registro</title>

<div class="container">
<br>    
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand col-md-10" href="#">Registrar</a>
  <a href="index.php"><button type="submit" class="btn btn-primary" value="Input Button">Regresar</button></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>
  <Br>
  <br>
  <form action="habitacion.php" method="post">
  <div class="form-group">
      <label for="">Nombre:</label>
      <input type="text" class="form-control" placeholder="Ingresa Nombre" name="txtnombre" required>
    </div>
    <div class="form-group">
      <label for="">Correo:</label>
      <input type="text" class="form-control" placeholder="Ingresa Correo" name="txtcorreo" required>
    </div>
    <div class="form-group">
      <label for="">Contraseña:</label>
      <input type="password" class="form-control" placeholder="Ingresa Contraseña" name="txtcontraseña" required>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Recordar Contraseña
      </label>
    </div>
      <button type="submit" class="btn btn-primary" name="btnresgistrar">Registrar</button>
  </form>
</div>