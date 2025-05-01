<?php
// model/Categoria.php

class Categoria {
    public $nombre;
    public $porcentaje;

    public function __construct($nombre, $porcentaje) {
        $this->nombre = $nombre;
        $this->porcentaje = $porcentaje;
    }

    // Método para actualizar el nombre y porcentaje
    public function actualizar($nuevoNombre, $nuevoPorcentaje) {
        $this->nombre = $nuevoNombre;
        $this->porcentaje = $nuevoPorcentaje;
    }
}
?>
