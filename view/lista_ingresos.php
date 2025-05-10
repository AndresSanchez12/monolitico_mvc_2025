<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingresos Registrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ingresos Registrados</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Mes</th>
            <th>Año</th>
            <th>Valor</th>
            <th>Acciones</th>
        </tr>

        <?php
        foreach ($ingresos as $ingreso) {
            echo "<tr>";
            echo "<td>{$ingreso['month']}</td>";
            echo "<td>{$ingreso['year']}</td>";
            echo "<td>$" . number_format($ingreso['value'], 2) . "</td>";
            echo "<td>
                <a href='index.php?accion=form_modificar_ingreso&mes={$ingreso['month']}&anio={$ingreso['year']}'>✏️ Modificar</a>
                <a href='index.php?accion=eliminar_ingreso&id={$ingreso['id']}'>🗑️ Eliminar</a>
                </td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br>
    <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
</body>
</html>
