<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categorías Registradas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Categorías Registradas</h1>

        <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Porcentaje (%)</th>
                <th>Acciones</th>
            </tr>

            <?php foreach ($categorias as $categoria): ?>
                <tr>
                    <td><?php echo htmlspecialchars($categoria['name']); ?></td>
                    <td><?php echo number_format($categoria['percentage'], 2); ?>%</td>
                    <td>
                        <a href="index.php?accion=form_modificar_categoria&id=<?php echo $categoria['id']; ?>" class="btn">✏️ Modificar</a>
                        <a href="index.php?accion=eliminar_categoria&id=<?php echo $categoria['id']; ?>" class="btn">🗑️ Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <br>
        <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
    </div>
</body>
</html>
