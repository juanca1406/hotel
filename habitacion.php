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
    }
?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Torre Juan</title>
    <link rel="stylesheet" href="css/reserva.css">
    <link rel="shortcut icon" href="imagen/hotel.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav>  
        <input type="checkbox" id="check">
        <a href="#" class="pricipal">
            <img src="imagen/hotel.png" alt="" class="logo">
        </a>
        <ul>
            <li><a class="active" href="habitacion.php"><tbody>
               <?php echo $_SESSION['nombre']?>
            </tbody></a></li>  
        </ul>
        <h1>Habitacion</h1>
        <img src="imagen/habitacion1.jpg" alt="" >
        <label for="">precio: 150.000 
            <p>Para Pareja</p>
        </label>
        <br>
        <br>
        <div class="reserva">
        <a href="reserva.php"><button>Reservar</button></a>
        </div>
    </nav>
</body>
</html>