<!-- view/lista_gastos.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Gastos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gastos Registrados</h1>

    <a href="index.php?accion=form_gasto">Registrar Nuevo Gasto</a> |
    <a href="index.php?accion=form_modificar_gasto">Modificar Gasto</a><br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>Categoría</th>
            <th>Mes</th>
            <th>Año</th>
            <th>Valor</th>
        </tr>

        <?php
        if (!empty($gastos)) {
            foreach ($gastos as $gasto) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($gasto->categoria) . "</td>";
                echo "<td>" . htmlspecialchars($gasto->mes) . "</td>";
                echo "<td>" . htmlspecialchars($gasto->anio) . "</td>";
                echo "<td>" . number_format($gasto->valor, 2) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay gastos registrados.</td></tr>";
        }
        ?>
    </table>

    <br><br>
<a href="index.php" class="btn-volver">⬅ Volver al Menú</a>

</body>
</html>
