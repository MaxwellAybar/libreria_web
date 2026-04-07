<?php include("includes/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Listado de Libros</title>
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
  <h1>📚 Libros disponibles</h1>
  <table border="1">
    <tr><th>Título</th><th>Autor(es)</th></tr>
    <?php
    $sql = "SELECT t.titulo, a.nombre 
            FROM titulos t
            INNER JOIN titulo_autor ta ON t.id_titulo = ta.id_titulo
            INNER JOIN autores a ON ta.id_autor = a.id_autor";
    $stmt = $pdo->query($sql);
    foreach ($stmt as $fila) {
        echo "<tr><td>{$fila['titulo']}</td><td>{$fila['nombre']}</td></tr>";
    }
    ?>
  </table>
</body>
</html>
