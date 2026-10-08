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
    <section class="hero">
      <h1 style="text-align: center; margin-top: 150px;">Veni a descubir Payogasta</h1>
      <button class="btnUbi" style="display: block; margin: 20px auto;" onclick="window.location.href='Payogasta.php'">Cómo llegar a Payogasta</button>
    </section>
    <div class="grid-parajes">
      <?php
        include("conexion.php");

        $sql = "SELECT * FROM parajes";
        $result = $conexion->query($sql);

        while($fila = $result->fetch_assoc()){
        echo "<div class='card'>";
        echo "<img src='img/".$fila['imagen']."' alt='".$fila['nombre']."'>";
        echo "<h3>".$fila['nombre']."</h3>";
        echo "<p>".$fila['descripcion']."</p>";
        echo "</div>";
}
?>
    </div>
  </main>

  <footer>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
