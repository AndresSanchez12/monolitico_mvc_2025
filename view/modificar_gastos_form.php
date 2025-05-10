<!-- view/modificar_gasto_form.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Gasto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Modificar Gasto</h1>

    <form action="index.php?accion=modificar_gasto" method="post">
        <label>Categoría Actual:</label>
        <input type="text" name="categoria_actual" required><br><br>

        <label>Mes:</label>
        <input type="text" name="mes" required><br><br>

        <label>Año:</label>
        <input type="number" name="anio" required><br><br>

        <label>Nueva Categoría:</label>
        <input type="text" name="nueva_categoria" required><br><br>

        <label>Nuevo Valor del Gasto:</label>
        <input type="number" name="nuevo_valor" required><br><br>

        <button type="submit">Actualizar Gasto</button>
    </form>
    <br><br>
<a href="index.php" class="btn-volver">⬅ Volver al Menú</a>

</body>
</html>
