<!-- view/lista_ingresos.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Ingresos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ingresos Registrados</h1>

    <a href="index.php">Registrar Nuevo Ingreso</a> |
    <a href="index.php?accion=form_modificar_ingreso">Modificar Ingreso</a><br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>Mes</th>
            <th>Año</th>
            <th>Valor</th>
        </tr>

        <?php
        if (!empty($ingresos)) {
            foreach ($ingresos as $ingreso) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($ingreso->mes) . "</td>";
                echo "<td>" . htmlspecialchars($ingreso->anio) . "</td>";
                echo "<td>" . number_format($ingreso->valor, 2) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay ingresos registrados.</td></tr>";
        }
        ?>
    </table>

    <br><br>
<a href="index.php" class="btn-volver">⬅ Volver al Menú</a>

</body>
</html>
