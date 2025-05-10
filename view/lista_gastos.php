<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gastos Registrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Gastos Registrados</h1>

        <table class="table">
            <tr>
                <th>Categoría</th>
                <th>Mes</th>
                <th>Año</th>
                <th>Valor</th>
                <th>Acciones</th>
            </tr>

            <?php foreach ($gastos as $gasto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($gasto['name']); ?></td>
                    <td><?php echo htmlspecialchars($gasto['month']); ?></td>
                    <td><?php echo htmlspecialchars($gasto['year']); ?></td>
                    <td>$<?php echo number_format($gasto['value'], 2); ?></td>
                    <td>
                        <a href="index.php?accion=form_modificar_gasto&id=<?php echo $gasto['id']; ?>" class="btn">✏️ Modificar</a>
                        <a href="index.php?accion=eliminar_gasto&id=<?php echo $gasto['id']; ?>" class="btn">🗑️ Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <br>
        <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
    </div>
</body>
</html>
