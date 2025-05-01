<!-- view/reporte_resultado.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Gastos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Reporte de Gastos - <?php echo htmlspecialchars($mes) . " " . htmlspecialchars($anio); ?></h1>

    <h2>Ingreso del mes: $<?php echo number_format($ingreso, 2); ?></h2>

    <h2>Gastos:</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>Categoría</th>
            <th>Valor</th>
            <th>Advertencia</th>
        </tr>

        <?php
        if (!empty($gastosDelMes)) {
            foreach ($gastosDelMes as $gasto) {
                $advertencia = "";

                // Revisamos si la categoría tiene un límite de porcentaje
                foreach ($categorias as $categoria) {
                    if ($categoria->nombre == $gasto->categoria) {
                        $limite = ($categoria->porcentaje / 100) * $ingreso;
                        if ($gasto->valor > $limite) {
                            $advertencia = "Se excedió el límite de gasto (" . $categoria->porcentaje . "% permitido)";
                        }
                        break;
                    }
                }

                echo "<tr>";
                echo "<td>" . htmlspecialchars($gasto->categoria) . "</td>";
                echo "<td>$" . number_format($gasto->valor, 2) . "</td>";
                echo "<td style='color:red'>" . $advertencia . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay gastos para este mes.</td></tr>";
        }
        ?>
    </table>

    <h2>Total Gastos: $<?php echo number_format($totalGastos, 2); ?></h2>
    <h2>Ahorro: $<?php echo number_format($ahorro, 2); ?></h2>

    <?php
    if ($porcentajeAhorro < 10) {
        echo "<h3 style='color:red'>Advertencia: No se logró ahorrar el 10% del ingreso.</h3>";
        echo "<h3>Porcentaje de ahorro real: " . number_format($porcentajeAhorro, 2) . "%</h3>";
    } else {
        echo "<h3 style='color:green'>¡Buen trabajo! Se logró ahorrar al menos el 10%.</h3>";
    }
    ?>

    <br>
    <a href="index.php">Volver al Inicio</a>
    <br><br>
<a href="index.php" class="btn-volver">⬅ Volver al Menú</a>

</body>
</html>
