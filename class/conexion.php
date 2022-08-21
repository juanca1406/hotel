<?php
    class conexion{

    private $host;
    private $user;
    private $pass;
    private $db;
    private $con;

    public function __construct(){
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "hotel";
        $this->con = new mysqli($this->host, $this->user, $this->pass, $this->db);
        $this->con->set_charset("utf8");
        if($this->con->connect_error){
            die("Error de conexión: ".$this->con->connect_errno." ".$this->con->connect_error);
        }else{
            //echo "Conexión exitosa. ".$this->con->host_info;
        }
    }
     //metodos
    //retornar datos (SELECT - READ)
    public function consultaRetorno($query){
        try {
            $sql = $this->con->query($query);
            return $sql;
        } catch (Exception $e) {
            mysqli_close($this->con);
            
        }          
    }
    //RETORNAR UNA EJECUCION (INSERT - CREATE, UPDATE - UPDATE, DELETE - DELETE)
    //true o flase.
    public function consultaSimpre($query){
        try {
            $sql = $this->con->query($query);
            return true;
        } catch (Exception $e) {
            mysqli_close($this->con);
            return false;
        }
    }
 }
?>