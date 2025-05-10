<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Gasto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Modificar Gasto</h1>

        <form action="index.php?accion=modificar_gasto" method="post">
            <input type="hidden" name="id" value="<?php echo $gasto['id']; ?>">

            <label for="categoria">Categoría:</label>
            <select name="nueva_categoria" id="categoria" required>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?php echo $categoria['id']; ?>" <?php echo ($categoria['id'] == $gasto['idCategory']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($categoria['name']); ?>
                    </option>
                <?php endforeach; ?>
            </select><br><br>

            <label for="nuevo_valor">Nuevo Valor del Gasto:</label>
            <input type="number" name="nuevo_valor" id="nuevo_valor" required min="1" step="0.01" value="<?php echo $gasto['value']; ?>"><br><br>

            <button type="submit" class="btn">Actualizar Gasto</button>
        </form>

        <br>
        <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
    </div>
</body>
</html>