<?php
    class Usuario{
        private $nombre;
        private $apellidos;
        private $password;
        private $email;
        private $connection;
        public function __construct(){
            require_once('class_conexion.php');
            $this -> connection = new ConexionMySQL(); //conexion con calass_conexion.php
            
        }
         //set usuario:
        public function insert($nombre, $apellidos, $password, $email){
            $this -> nombre = $nombre;
            $this -> apellidos = $apellidos;
            $this -> password = $password;
            $this -> email = $email;
            $sql = "INSERT INTO usuarios (nombre, apellidos, password, email) VALUES ('$nombre', '$apellidos', '$password', '$email')";
            $registros= $this->connection->executeQuery($sql);
            return $registros;
        }
        //get usuario por usuario y contrseña para el login:
        public function getUserByPassword($nombre, $password){
            $this -> nombre = $nombre;
            $this -> password = $password;
            $sql= "SELECT * FROM usuarios WHERE TRIM(nombre) = '".trim($nombre)."' AND password ='".trim($password)."'";
            $registros= $this->connection->executeQuery($sql);
            return $registros;
        }
        //get usuario por email
        public function getUserByEmail($email){
            $this -> email = $email;
            $sql= "SELECT * FROM usuarios WHERE TRIM(email) = '".trim($email)."'";
            //select * from usuarios where trim(m)
            $registros= $this->connection->executeQuery($sql);
            return $registros;
        }
    }