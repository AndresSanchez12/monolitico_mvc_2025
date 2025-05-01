<?php
// controller/GastoController.php
require_once 'model/Gasto.php';

class GastoController {
    public function __construct() {
        if (!isset($_SESSION['gastos'])) {
            $_SESSION['gastos'] = [];
        }
    }

    public function registrarGasto($categoria, $mes, $anio, $valor) {
        if ($valor < 0) {
            echo "Error: El valor del gasto no puede ser negativo.";
            return;
        }

        $nuevoGasto = new Gasto($categoria, $mes, $anio, $valor);
        $_SESSION['gastos'][] = $nuevoGasto;
        echo "Gasto registrado correctamente.";
    }

    public function modificarGasto($categoriaActual, $mes, $anio, $nuevaCategoria, $nuevoValor) {
        foreach ($_SESSION['gastos'] as $gasto) {
            if ($gasto->categoria == $categoriaActual && $gasto->mes == $mes && $gasto->anio == $anio) {
                $gasto->actualizar($nuevaCategoria, $nuevoValor);
                echo "Gasto actualizado correctamente.";
                return;
            }
        }
        echo "Error: No se encontró el gasto.";
    }

    public function eliminarGasto($categoria, $mes, $anio) {
        foreach ($_SESSION['gastos'] as $indice => $gasto) {
            if ($gasto->categoria == $categoria && $gasto->mes == $mes && $gasto->anio == $anio) {
                unset($_SESSION['gastos'][$indice]);
                echo "Gasto eliminado correctamente.";
                return;
            }
        }
        echo "Error: No se encontró el gasto.";
    }

    public function listarGastos() {
        return $_SESSION['gastos'];
    }
}
?>
