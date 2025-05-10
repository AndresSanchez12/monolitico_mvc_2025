<!-- view/reporte_resultado.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte Mensual</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Reporte del Mes</h1>

    <h2>Ingreso Total: $<?php echo number_format($reporteData['ingreso'], 2); ?></h2>

    <h2>Gastos:</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>Categoría</th>
            <th>Valor</th>
            <th>Advertencia</th>
        </tr>

        <?php foreach ($reporteData['gastos'] as $gasto): 
            $advertencia = ($gasto['value'] > ($reporteData['ingreso'] * ($gasto['percentage'] / 100))) ? "⚠️ Excedido" : "";
        ?>
            <tr>
                <td><?php echo htmlspecialchars($gasto['name']); ?></td>
                <td>$<?php echo number_format($gasto['value'], 2); ?></td>
                <td><?php echo $advertencia; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Total Gastos: $<?php echo number_format($reporteData['totalGastos'], 2); ?></h2>
    <h2>Ahorro: $<?php echo number_format($reporteData['ahorro'], 2); ?></h2>
    <h3>Porcentaje de Ahorro: <?php echo number_format($reporteData['porcentajeAhorro'], 2); ?>%</h3>

    <?php if ($reporteData['porcentajeAhorro'] < 10): ?>
        <p style="color: red;">Advertencia: No se alcanzó el 10% de ahorro.</p>
    <?php else: ?>
        <p style="color: green;">¡Buen trabajo! Se alcanzó el objetivo de ahorro.</p>
    <?php endif; ?>

    <br>
    <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
</body>
</html>
