<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/sesion.css">
  <link rel="shortcut icon" href="imagen/hotel.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <title>Login</title>
</head>
<body>
<nav>
  <input type="checkbox" id="check">
    <a href="#" class="logo">
      <img src="imagen/hotel.png" alt="" class="logo">
    </a>
    <ul>
      <li><a class="" href="registro/sesion.php">Iniciar Sesion</a></li>
      <li><a class="" href="inicia.php">Registrar</a></li>   
    </ul>
</nav>
  <form action="validar.php" method="post">
  <h1 >Sistema de login</h1>
  <p>Usuario <input type="text" placeholder="ingrese su nombre" name="nombre"></p>
  <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="password"></p>
  <input type="submit" value="Ingresar">
   
  </form>
</div>
</body>
</html>