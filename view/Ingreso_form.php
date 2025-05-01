<!-- view/ingreso_form.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Ingreso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registrar Ingreso</h1>
    <form action="index.php?accion=registrar_ingreso" method="post">
        <label>Mes:</label>
        <input type="text" name="mes" required><br><br>

        <label>Año:</label>
        <input type="number" name="anio" required><br><br>

        <label>Valor del Ingreso:</label>
        <input type="number" name="valor" required><br><br>

        <button type="submit">Guardar Ingreso</button>
    </form>

    <br>
    <a href="index.php?accion=lista_ingresos">Ver Ingresos Registrados</a>
    <br><br>
<a href="index.php" class="btn-volver">⬅ Volver al Menú</a>

</body>
</html>
