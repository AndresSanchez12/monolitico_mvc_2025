<!-- view/categoria_form.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Categoría</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registrar Nueva Categoría</h1>

    <form action="index.php?accion=registrar_categoria" method="post">
        <label>Nombre de la Categoría:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Porcentaje Permitido (%):</label>
        <input type="number" name="porcentaje" required><br><br>

        <button type="submit">Guardar Categoría</button>
    </form>

    <br>
    <a href="index.php?accion=lista_categorias">Ver Categorías Registradas</a>
    <br><br>
<a href="index.php" class="btn-volver">⬅ Volver al Menú</a>

</body>
</html>
