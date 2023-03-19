<?php
    class post{
        private $id;
        private $email;
        private $titulo;
        private $contenido;
        private $fecha;
        private $imagen;
        private $connection;
        public function __construct(){
            require_once('class_conexion.php');
            $this -> connection = new ConexionMySQL(); //conexion con calass_conexion.php
            
        }
         //guardar post:
         public function insert($email, $titulo, $contenido, $fecha, $imagen){
            $this -> email = $email;
            $this -> titulo = $titulo;
            $this -> contenido = $contenido;
            $this -> fecha = $fecha;
            $this -> email = $imagen;
            $sql = "INSERT INTO post (email, titulo, contenido, fecha, imagen) VALUES ('$email', '$titulo', '$contenido', '$fecha', '$imagen')";
            $registros= $this->connection->executeQuery($sql);
            return $registros;
        }
         //mostrar los post:
        public function getPosts(){
            $sql = "SELECT * FROM `post`";
            $registros= $this->connection->executeQuery($sql);;
        
            return $registros;
        }   
        public function deletePostById($id){
            $this -> id = $id;
            $sql = "DELETE FROM `post` WHERE id = ".$id;
            $registros = $this->connection->executeQuery($sql);
    
            return $registros;
        }
    }