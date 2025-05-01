<?php
// model/Ingreso.php

class Ingreso {
    public $mes;
    public $anio;
    public $valor;

    public function __construct($mes, $anio, $valor) {
        $this->mes = $mes;
        $this->anio = $anio;
        $this->valor = $valor;
    }

    // Método para actualizar el valor del ingreso
    public function actualizarValor($nuevoValor) {
        if ($nuevoValor >= 0) {
            $this->valor = $nuevoValor;
            return true;
        } else {
            return false;
        }
    }
}
?>
