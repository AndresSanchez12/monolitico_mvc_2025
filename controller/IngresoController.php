<?php
require_once 'model/Ingreso.php';

class IngresoController {

    public function registrarIngreso($mes, $anio, $valor) {
        $ingreso = new Ingreso($valor, $mes, $anio);
        if ($ingreso->save()) {
            echo "Ingreso registrado correctamente.";
        } else {
            echo "Error al registrar el ingreso.";
        }
    }

    public function modificarIngreso($id, $nuevoValor) {
        $ingreso = Ingreso::getById($id);
        if ($ingreso) {
            $ingreso->value = (float) $nuevoValor;
            if ($ingreso->update()) {
                echo "Ingreso actualizado correctamente en la base de datos.";
            } else {
                echo "Error al actualizar el ingreso en la base de datos.";
            }
        } else {
            echo "Ingreso no encontrado.";
        }
    }

    public function eliminarIngreso($id) {
        if (Ingreso::delete($id)) {
            echo "Ingreso eliminado correctamente de la base de datos.";
        } else {
            echo "Error al eliminar el ingreso en la base de datos.";
        }
    }

    public function listarIngresos() {
        $ingresos = Ingreso::getAll();
        foreach ($ingresos as &$ingreso) {
            $ingreso['value'] = (float) $ingreso['value'];
            $ingreso['month'] = $ingreso['month'] ?? 'Mes no definido';
            $ingreso['year'] = $ingreso['year'] ?? 'Año no definido';
        }
        return $ingresos;
    }
}
