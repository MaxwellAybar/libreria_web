<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("includes/conexion.php");

$sql = "SELECT t.titulo, a.nombre, a.apellido
        FROM titulos t
        INNER JOIN titulo_autor ta ON t.id_titulo = ta.id_titulo
        INNER JOIN autores a ON ta.id_autor = a.id_autor";

$stmt = $pdo->query($sql);
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!$resultados) {
    echo "<p>No se encontraron libros.</p>";
} else {
    echo "<h1>📚 Libros disponibles</h1>";
    foreach ($resultados as $fila) {
        echo "<p>{$fila['titulo']} — {$fila['nombre']} {$fila['apellido']}</p>";
    }
}
?>
