<!-- view/lista_categorias.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Categorías</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Categorías Registradas</h1>

    <a href="index.php?accion=form_categoria">Registrar Nueva Categoría</a><br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nombre</th>
            <th>Porcentaje (%)</th>
        </tr>

        <?php
        if (!empty($categorias)) {
            foreach ($categorias as $categoria) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($categoria->nombre) . "</td>";
                echo "<td>" . htmlspecialchars($categoria->porcentaje) . "%</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No hay categorías registradas.</td></tr>";
        }
        ?>
    </table>

    <br><br>
<a href="index.php" class="btn-volver">⬅ Volver al Menú</a>

</body>
</html>
