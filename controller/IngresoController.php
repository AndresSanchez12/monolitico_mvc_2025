<?php
// controller/IngresoController.php
require_once 'model/Ingreso.php';

class IngresoController {
    public function __construct() {
        if (!isset($_SESSION['ingresos'])) {
            $_SESSION['ingresos'] = [];
        }
    }

    public function registrarIngreso($mes, $anio, $valor) {
        // Validar que el valor no sea negativo
        if ($valor < 0) {
            echo "Error: El ingreso no puede ser menor a cero.";
            return;
        }

        // Validar que no exista ya un ingreso para el mismo mes y año
        foreach ($_SESSION['ingresos'] as $ingreso) {
            if ($ingreso->mes == $mes && $ingreso->anio == $anio) {
                echo "Error: Ya existe un ingreso para ese mes y año.";
                return;
            }
        }

        // Crear y guardar el nuevo ingreso
        $nuevoIngreso = new Ingreso($mes, $anio, $valor);
        $_SESSION['ingresos'][] = $nuevoIngreso;

        echo "Ingreso registrado correctamente.";
    }

    public function modificarIngreso($mes, $anio, $nuevoValor) {
        foreach ($_SESSION['ingresos'] as $ingreso) {
            if ($ingreso->mes == $mes && $ingreso->anio == $anio) {
                $ingreso->actualizarValor($nuevoValor);
                echo "Ingreso actualizado correctamente.";
                return;
            }
        }
        echo "Error: No se encontró ingreso para ese mes y año.";
    }

    public function listarIngresos() {
        return $_SESSION['ingresos'];
    }
}
?>
