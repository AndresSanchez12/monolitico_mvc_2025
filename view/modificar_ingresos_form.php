<!-- view/modificar_ingreso_form.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Ingreso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Modificar Ingreso</h1>
    <form action="index.php?accion=modificar_ingreso" method="post">
        <label>Mes:</label>
        <input type="text" name="mes" required><br><br>

        <label>Año:</label>
        <input type="number" name="anio" required><br><br>

        <label>Nuevo Valor del Ingreso:</label>
        <input type="number" name="nuevo_valor" required><br><br>

        <button type="submit">Actualizar Ingreso</button>
    </form>
    <br><br>
<a href="index.php" class="btn-volver">⬅ Volver al Menú</a>

</body>
</html>
