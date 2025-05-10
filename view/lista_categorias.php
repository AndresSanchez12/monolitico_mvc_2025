<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categorías Registradas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Categorías Registradas</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nombre</th>
            <th>Porcentaje</th>
            <th>Acciones</th>
        </tr>

        <?php
        foreach ($categorias as $categoria) {
            echo "<tr>";
            echo "<td>{$categoria['name']}</td>";
            echo "<td>{$categoria['percentage']}%</td>";
            echo "<td>
                <a href='index.php?accion=form_modificar_categoria&id={$categoria['id']}'>✏️ Modificar</a>
                <a href='index.php?accion=eliminar_categoria&id={$categoria['id']}'>🗑️ Eliminar</a>
                </td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br>
    <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
</body>
</html>
