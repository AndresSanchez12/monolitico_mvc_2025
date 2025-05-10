<?php
require_once 'model/Gasto.php';

class GastoController {

    public function registrarGasto($categoria, $mes, $anio, $valor) {
        $pdo = getConnection();

        // Verificar si existe un reporte para ese mes y año
        $stmt = $pdo->prepare("SELECT id FROM reports WHERE month = ? AND year = ?");
        $stmt->execute([$mes, $anio]);
        $report = $stmt->fetch();

        if ($report) {
            $idReport = $report['id'];
            $gasto = new Gasto($valor, $categoria, $idReport);
            $gasto->save();
            echo "Gasto registrado correctamente.";
        } else {
            echo "Error: No existe un reporte para ese mes y año.";
        }
    }

    public function modificarGasto($id, $nuevaCategoria, $nuevoValor) {
        $gasto = new Gasto($nuevoValor, $nuevaCategoria, null, $id);
        if ($gasto->update()) {
            echo "Gasto actualizado correctamente.";
        } else {
            echo "Error al actualizar el gasto.";
        }
    }

    public function eliminarGasto($id) {
        if (Gasto::delete($id)) {
            echo "Gasto eliminado correctamente.";
        } else {
            echo "Error al eliminar el gasto.";
        }
    }

    public function listarGastos() {
        return Gasto::getAll();
    }
}
