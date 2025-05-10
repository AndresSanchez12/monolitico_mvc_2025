<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generar Reporte</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Generar Reporte Mensual</h1>

    <form action="index.php?accion=ver_reporte" method="post">
        <label>Mes:</label>
        <input type="text" name="mes" required><br><br>

        <label>Año:</label>
        <input type="number" name="anio" required><br><br>

        <button type="submit">Generar Reporte</button>
    </form>

    <br>
    <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
</body>
</html>
