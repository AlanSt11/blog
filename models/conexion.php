<?php
    class Conexion{
        private $con;

        public function __construct(){
            $this->con = new mysqli('localhost', 'root', '', 'blog');
        }

        public function getPost(){
            $query = $this->con->query('SELECT * FROM post');
            $data = [];
            $i = 0;

            while ($fila = $query->fetch_assoc()) {
                $data[$i] = $fila;
                $i++;
            }
            return $data;
        }
    }
?>