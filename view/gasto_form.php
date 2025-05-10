<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Gasto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registrar Gasto</h1>

    <form action="index.php?accion=registrar_gasto" method="post">
        <label>Categoría (ID):</label>
        <input type="number" name="categoria" required><br><br>

        <label>Mes:</label>
        <input type="text" name="mes" required><br><br>

        <label>Año:</label>
        <input type="number" name="anio" required><br><br>

        <label>Valor del Gasto:</label>
        <input type="number" name="valor" required><br><br>

        <button type="submit">Guardar Gasto</button>
    </form>

    <br>
    <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
</body>
</html>
