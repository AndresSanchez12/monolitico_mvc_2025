<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte Mensual</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Reporte Mensual</h1>

        <h2>Ingreso Total: $<?php echo number_format($reporteData['ingreso'], 2); ?></h2>

        <h2>Gastos:</h2>
        <table class="table">
            <tr>
                <th>Categoría</th>
                <th>Valor</th>
                <th>Advertencia</th>
            </tr>

            <?php foreach ($reporteData['gastos'] as $gasto): ?>
                <?php 
                    $limite = $reporteData['ingreso'] * ($gasto['percentage'] / 100);
                    $advertencia = ($gasto['value'] > $limite) ? "⚠️ Excedido" : "";
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
            <p class="alert alert-error">Advertencia: No se alcanzó el 10% de ahorro.</p>
        <?php else: ?>
            <p class="alert alert-success">¡Buen trabajo! Se alcanzó el objetivo de ahorro.</p>
        <?php endif; ?>

        <br>
        <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
    </div>
</body>
</html>