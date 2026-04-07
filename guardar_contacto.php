<?php
include("includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];
    $fecha = date("Y-m-d H:i:s");

    $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) 
            VALUES (:fecha, :correo, :nombre, :asunto, :comentario)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':fecha' => $fecha,
        ':correo' => $correo,
        ':nombre' => $nombre,
        ':asunto' => $asunto,
        ':comentario' => $comentario
    ]);

    echo "✅ Mensaje enviado correctamente.";
}
?>
