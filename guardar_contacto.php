<?php
include("includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $comentario = $_POST["comentario"];

    $sql = "INSERT INTO contacto (nombre, correo, asunto, comentario)
            VALUES (:nombre, :correo, :asunto, :comentario)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":nombre" => $nombre,
        ":correo" => $correo,
        ":asunto" => $asunto,
        ":comentario" => $comentario
    ]);

    echo "Mensaje guardado correctamente.";
}
?>
