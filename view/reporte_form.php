<!-- view/reporte_form.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generar Reporte Mensual</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Generar Reporte de Gastos del Mes</h1>

    <form action="index.php?accion=ver_reporte" method="post">
        <label>Mes:</label>
        <input type="text" name="mes" required><br><br>

        <label>Año:</label>
        <input type="number" name="anio" required><br><br>

        <button type="submit">Generar Reporte</button>
    </form>

    <br>
    <a href="index.php">Volver al Inicio</a>
</body>
<br><br>
<a href="index.php" class="btn-volver">⬅ Volver al Menú</a>

</html>
