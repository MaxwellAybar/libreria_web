<?php include("includes/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mensajes de Contacto</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <!-- Menú de navegación -->
  <nav>
    <a href="index.php">📚 Libros</a> |
    <a href="autores.php">👨‍💻 Autores</a> |
    <a href="contacto.php">✉️ Contacto</a> |
    <a href="mensajes.php">📩 Mensajes</a>
  </nav>
  <hr>

  <!-- Contenido principal -->
  <h1>📩 Mensajes recibidos</h1>
  <table border="1">
    <tr><th>Fecha</th><th>Nombre</th><th>Correo</th><th>Asunto</th><th>Comentario</th></tr>
    <?php
    $sql = "SELECT * FROM contacto ORDER BY fecha DESC";
    $stmt = $pdo->query($sql);
    foreach ($stmt as $fila) {
        echo "<tr>
                <td>{$fila['fecha']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['correo']}</td>
                <td>{$fila['asunto']}</td>
                <td>{$fila['comentario']}</td>
              </tr>";
    }
    ?>
  </table>
</body>
</html>
