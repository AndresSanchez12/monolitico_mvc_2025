<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Categoría</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Registrar Nueva Categoría</h1>

        <form action="index.php?accion=registrar_categoria" method="post">
            <label for="nombre">Nombre de la Categoría:</label>
            <input type="text" name="nombre" id="nombre" required><br><br>

            <label for="porcentaje">Porcentaje Permitido (%):</label>
            <input type="number" name="porcentaje" id="porcentaje" required min="1" max="100" step="0.01"><br><br>

            <button type="submit" class="btn">Guardar Categoría</button>
        </form>

        <br>
        <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
    </div>
</body>
</html>
