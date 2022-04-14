<?php

    class config {
        public $nombre , $color , $email ;
        
        public function setNombre($nombre){
            $this->nombre = strtolower($nombre);
        }

        public function getNombre(){
            return ucwords($this->nombre);
        }

        public function getMayuscula($color){
            return strtoupper($color);
        }

        public function getEmail($email){
            return str_shuffle($email);
        }
    }

?>