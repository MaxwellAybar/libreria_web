<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
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
  <h1>Formulario de Contacto</h1>
  <form action="guardar_contacto.php" method="POST">
    <label>Nombre:</label><input type="text" name="nombre" required><br>
    <label>Correo:</label><input type="email" name="correo" required><br>
    <label>Asunto:</label><input type="text" name="asunto" required><br>
    <label>Comentario:</label><textarea name="comentario" required></textarea><br>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>
