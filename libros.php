<?php
include("conexion.php");

$sql = "SELECT DISTINCT t.titulo, a.nombre, a.apellido
        FROM titulos t
        INNER JOIN titulo_autor ta ON t.id_titulo = ta.id_titulo
        INNER JOIN autores a ON ta.id_autor = a.id_autor";

$stmt = $pdo->query($sql);
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Libros</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <?php include("menu.php"); ?>
  <div class="container mt-5">
    <h2>Libros disponibles</h2>
    <div class="row">
      <?php foreach ($resultados as $fila): ?>
        <div class="col-md-4 mb-3">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($fila['titulo']); ?></h5>
              <p class="card-text">
                <strong>Autor:</strong> <?php echo htmlspecialchars($fila['nombre'] . " " . $fila['apellido']); ?>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
