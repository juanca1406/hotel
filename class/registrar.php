<?php
    require_once "conexion.php";
    class Registrar
    {
        public $id;
        public $nombre;
        public $correo; 
        public $contraseña;
        public $fecha;
        public $con;

        //Constructor de la clase
        public function __construct(){
            $this->con = new conexion();
        }
        //metodos set y get
        public function _SET($atr, $valor){
            $this->$atr = $valor;
        }
        public function _GET($atr){
            return $this->$atr;
        }      
        //crear matricula
        public function registrarClientes(){
            $sql = "INSERT INTO registros(nombre, correo, password, fecha)
                VALUES('{$this->nombre}', '{$this->correo}', 
                '{$this->contraseña}', '{$this->fecha}');";
            $res = $this->con->consultaSimpre($sql);
            return $res;
        }
        public function listaClientes(){
            $sql = "SELECT * FROM registros";
            $lista = $this->con->consultaRetorno($sql);
            return $lista;
        }
        public function datosClientes(){
            $sql = "SELECT * FROM registros WHERE id = '{$this->id}'";
            $result = $this->con->consultaRetorno($sql);
            $array = mysqli_fetch_assoc($result);
            $this->id = $array['id'];
            $this->nombre = $array['nombre'];
            $this->correo = $array['correo'];
            $this->contraseña = $array['contraseña'];
            $this->fecha = $array['fecha'];
            return $array;
        }
    }
?>