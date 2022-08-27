<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="reserva.css">
<body>
<form action="" method="post">
  <div class="imag">
    <img src="imagen/habitacion1.jpg" alt="">
  </div>

  <div class="form-group col-md-2">
    <label for="">Fecha de entrada:</label>
    <input type="date" class="form-control" name="txtnombre" required>
  </div>

  <div class="form-group col-md-2">
    <label for="">Fecha de salida:</label>
    <input type="date" class="form-control" name="txtcorreo" required>
    <label for="">Estadía de noche</label>
    <br>
      <label for="">Adultos <input class="col-md-3" type="text"></label>
    <br>
      <label for="">Menores <input class="col-md-3" type="text"></label>
    <br>
      <label for="">Habitaciones <input class="col-md-3" type="text"></label>
    <br>
    <button type="submit" class="btn btn-primary" name="btnresgistrar">Registrar</button>
  </div>
</form>
<div class="form-group col-md-2">
  <a href="habitacion.php"><button type="submit" class="btn btn-primary">Volver</button></a>
</div>
</body>