<?php include("includes/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Autores</title>
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
  <h1>👨‍💻 Autores registrados</h1>
  <ul>
    <?php
    $sql = "SELECT nombre FROM autores";
    $stmt = $pdo->query($sql);
    foreach ($stmt as $fila) {
        echo "<li>{$fila['nombre']}</li>";
    }
    ?>
  </ul>
</body>
</html>
