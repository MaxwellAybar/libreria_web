<?php
$host = "sql100.infinityfree.com";   // Host de InfinityFree
$dbname = "if0_41601903_libreria";   // Nombre exacto de tu base
$username = "if0_41601903";          // Usuario MySQL
$password = "seNMme7voUYx";          // Contraseña MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
