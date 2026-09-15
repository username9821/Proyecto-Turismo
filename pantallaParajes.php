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
      <div class="header-container">
        <img src="img/logoPayogasta2.png" alt="Logo de Payogasta" class="logo" width="150px" style="margin-left: 470px; margin-bottom: -25px;">
      </div> 
      <ul>
        <li><a href="index.php" style="margin-left: 25px;">Inicio</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Qué visitar</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Tonco</a></li>
            <li><a class="dropdown-item" href="#">Piul</a></li>
            <li><a class="dropdown-item" href="#">Punta del Agua</a></li>
            <li><a class="dropdown-item" href="#">Cortaderas</a></li>
            <li><a class="dropdown-item" href="#">Belgrano</a></li>
            <li><a class="dropdown-item" href="#">Buena Vista</a></li>
            <li><a class="dropdown-item" href="#">Palermo Oeste</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Qué hacer</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cabalgatas</a></li>
            <li><a class="dropdown-item" href="#">Trakking</a></li>
            <li><a class="dropdown-item" href="#">Senderismo</a></li>
            <li><a class="dropdown-item" href="#">Ciclismo</a></li>
            <li><a class="dropdown-item" href="#">Parque Nacional de los Cardones</a></li>

          </ul>
        </li>
        <li><a href="eventos.php">Eventos</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Servicios</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Alojamientos</a></li>
            <li><a class="dropdown-item" href="#">Restaurantes</a></li>
            <li><a class="dropdown-item" href="#">Establecimientos</a></li>
          </ul>
        </li>
        <li><a href="contacto.php">Contactos</a></li>
      </ul>
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
