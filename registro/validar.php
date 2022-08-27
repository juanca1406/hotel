<?php

include('db.php');

$NOMBRE=$_POST['nombre'];
$PASSWORD=$_POST['password'];
session_start();
$_SESSION['nombre']=$NOMBRE;

$consulta = "SELECT * FROM registros where nombre = '$NOMBRE' and password ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:http://localhost/hotel/habitacion.php");
    
}else{
    include("sesion.php");
    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>