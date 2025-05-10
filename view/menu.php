<!-- view/menu.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sistema de Control de Gastos</h1>

    <div class="menu">
        <a href="index.php?accion=form_categoria">➕ Registrar Categoría</a>
        <a href="index.php?accion=lista_categorias">📋 Ver Categorías</a>

        <a href="index.php?accion=form_ingreso">➕ Registrar Ingreso</a>
        <a href="index.php?accion=lista_ingresos">📋 Ver Ingresos</a>
        <a href="index.php?accion=form_modificar_ingreso">✏️ Modificar Ingreso</a>

        <a href="index.php?accion=form_gasto">➕ Registrar Gasto</a>
        <a href="index.php?accion=lista_gastos">📋 Ver Gastos</a>
        <a href="index.php?accion=form_modificar_gasto">✏️ Modificar Gasto</a>

        <a href="index.php?accion=form_reporte">📊 Generar Reporte</a>
    </div>
</body>
</html>
