<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Payogasta, Tierra del Pimiento</title>
  <link rel="stylesheet" href="estiloInicio.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header> 
    <nav>
      <?php include("nav.php"); ?>
    </nav>
  </header>

  <main>
    <h1 style="text-align: center; margin-top: 150px;">Veni a descubir Payogasta</h1>
    <h2>COMO LLEGAR A PAYOGASTA</h2>
    <div class="grid-parajes">
      <?php
        include("conexion.php");

        $sql = "SELECT nombre, descripcion FROM parajes";
        $result = $conexion->query($sql);

        while($fila = $result->fetch_assoc()){
        echo "<div class='card'>";
        echo "<img src='imagenes/".$fila['imagen']."' alt='".$fila['nombre']."'>";
        echo "<h3>".$fila['nombre']."</h3>";
        echo "<p>".$fila['descripcion']."</p>";
        echo "</div>";
}
?>
    </div>
  </main>

  <footer>
    <p>Municipalidad de Payogasta</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
