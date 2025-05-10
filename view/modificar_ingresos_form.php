<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Ingreso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Modificar Ingreso</h1>

        <form action="index.php?accion=modificar_ingreso" method="post">
            <label for="mes">Mes:</label>
            <select name="mes" id="mes" required>
                <option value="Enero">Enero</option>
                <option value="Febrero">Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo">Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto">Agosto</option>
                <option value="Septiembre">Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre">Noviembre</option>
                <option value="Diciembre">Diciembre</option>
            </select><br><br>

            <label for="anio">Año:</label>
            <input type="number" name="anio" id="anio" required min="2020" max="2030"><br><br>

            <label for="nuevo_valor">Nuevo Valor del Ingreso:</label>
            <input type="number" name="nuevo_valor" id="nuevo_valor" required min="1" step="0.01"><br><br>

            <button type="submit" class="btn">Actualizar Ingreso</button>
        </form>

        <br>
        <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
    </div>
</body>
</html>
