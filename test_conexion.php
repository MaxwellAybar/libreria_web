<?php
$host = "sql100.infinityfree.com";
$dbname = "if0_41601903_libreria";
$username = "if0_41601903";
$password = "seNMme7voUYx";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h2>Conexión exitosa a la base de datos</h2>";

    // Probar consulta
    $stmt = $pdo->query("SELECT * FROM autores");
    echo "<h3>Autores registrados:</h3>";
    echo "<ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>" . $row['id_autor'] . " - " . $row['nombre'] . " " . $row['apellido'] . "</li>";
    }
    echo "</ul>";

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
