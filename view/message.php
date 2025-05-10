<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje del Sistema</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo htmlspecialchars($titulo); ?></h1>
    <p><?php echo htmlspecialchars($mensaje); ?></p>

    <br>
    <a href="index.php" class="btn-volver">⬅ Volver al Menú</a>
</body>
</html>
