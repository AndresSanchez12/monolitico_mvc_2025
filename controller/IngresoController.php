<?php
require_once 'model/Ingreso.php';

class IngresoController {

    public function registrarIngreso($mes, $anio, $valor) {
        // Primero, buscamos el reporte correspondiente
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT id FROM reports WHERE month = ? AND year = ?");
        $stmt->execute([$mes, $anio]);
        $report = $stmt->fetch();

        if ($report) {
            $idReport = $report['id'];
            $ingreso = new Ingreso($valor, $idReport);
            $ingreso->save();
            echo "Ingreso registrado correctamente.";
        } else {
            echo "Error: No existe un reporte para ese mes y año.";
        }
    }

    public function modificarIngreso($mes, $anio, $nuevoValor) {
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT i.id FROM income i INNER JOIN reports r ON i.idReport = r.id WHERE r.month = ? AND r.year = ?");
        $stmt->execute([$mes, $anio]);
        $ingreso = $stmt->fetch();

        if ($ingreso) {
            $ingresoObj = new Ingreso($nuevoValor, null, $ingreso['id']);
            $ingresoObj->update();
            echo "Ingreso actualizado correctamente.";
        } else {
            echo "Error: No se encontró ingreso para ese mes y año.";
        }
    }

    public function listarIngresos() {
        return Ingreso::getAll();
    }
}
