<?php

class Tarea {

    private $titulo;
    private $descripcion;

    public function __construct() {
        
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getTitulo() {
        return $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

}  

?>