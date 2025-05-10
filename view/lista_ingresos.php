<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingresos Registrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Ingresos Registrados</h1>

        <table class="table">
            <tr>
                <th>Mes</th>
                <th>Año</th>
                <th>Valor</th>
                <th>Acciones</th>
            </tr>

            <?php foreach ($ingresos as $ingreso): ?>
                <tr>
                    <td><?php echo htmlspecialchars($ingreso['month']); ?></td>
                    <td><?php echo htmlspecialchars($ingreso['year']); ?></td>
                    <td>$<?php echo number_format($ingreso['value'], 2); ?></td>
                    <td>
                        <a href="index.php?accion=form_modificar_ingreso&mes=<?php echo $ingreso['month']; ?>&anio=<?php echo $ingreso['year']; ?>" class="btn">✏️ Modificar</a>
                        <a href="index.php?accion=eliminar_ingreso&id=<?php echo $ingreso['id']; ?>" class="btn">🗑️ Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <br>
        <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
    </div>
</body>
</html>
