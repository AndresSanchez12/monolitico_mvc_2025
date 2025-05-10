<?php
require_once 'model/Reporte.php';

class ReporteController {

    public function generarReporte($mes, $anio) {
        $reporte = Reporte::getByMonthAndYear($mes, $anio);

        if ($reporte) {
            $idReport = $reporte['id'];
            $ingresos = Reporte::getIngresosByReportId($idReport);
            $gastos = Reporte::getGastosByReportId($idReport);

            $totalIngreso = array_sum(array_column($ingresos, 'value'));
            $totalGastos = array_sum(array_column($gastos, 'value'));
            $ahorro = $totalIngreso - $totalGastos;
            $porcentajeAhorro = ($totalIngreso > 0) ? ($ahorro / $totalIngreso) * 100 : 0;

            return [
                'ingreso' => $totalIngreso,
                'gastos' => $gastos,
                'totalGastos' => $totalGastos,
                'ahorro' => $ahorro,
                'porcentajeAhorro' => $porcentajeAhorro
            ];
        } else {
            return null;
        }
    }
}
