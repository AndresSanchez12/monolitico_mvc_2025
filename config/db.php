<?php
// config/db.php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');  // Cambia esto si tu usuario es diferente
define('DB_PASS', '');      // Cambia esto si tu contraseña es diferente
define('DB_NAME', 'proyecto_1_db');

function getConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        return $pdo;
    } catch (PDOException $e) {
        echo "Error en la conexión: " . $e->getMessage();
        exit;
    }
}
