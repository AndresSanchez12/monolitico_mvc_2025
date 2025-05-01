<?php
// model/Gasto.php

class Gasto {
    public $categoria;
    public $mes;
    public $anio;
    public $valor;

    public function __construct($categoria, $mes, $anio, $valor) {
        $this->categoria = $categoria;
        $this->mes = $mes;
        $this->anio = $anio;
        $this->valor = $valor;
    }

    // Método para actualizar categoría y valor
    public function actualizar($nuevaCategoria, $nuevoValor) {
        $this->categoria = $nuevaCategoria;
        $this->valor = $nuevoValor;
    }
}
?>
