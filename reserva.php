<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<form action="" method="post">
  <img src="imagen/habitacion1.jpg" alt="">

  <div class="form-group col-md-2">
      <label for="">Fecha de entrada:</label>
      <input type="date" class="form-control" name="txtnombre" required>
    </div>

    <div class="form-group col-md-2">
      <label for="">Fecha de salida:</label>
      <input type="date" class="form-control" name="txtcorreo" required>
    </div>

    <div>
    <label for="">Estadía de noche</label>
    <br>
    <label for="">Adultos <input class="col-md-3" type="text"></label>
    </div>
    <label for="">Menores <input class="col-md-3" type="text"></label>
    </div>
    <br>
    <label for="">Habitaciones <input class="col-md-3" type="text"></label>
    </div>
    <br>
    <br>
<button type="submit" class="btn btn-primary" name="btnresgistrar">Registrar</button>
</form>
<a href="habitacion.php"><button>Volver</button></a>