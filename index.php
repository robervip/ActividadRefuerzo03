<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
  echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
else {
  $resultado = $conexion->query("SELECT * FROM equipo");
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="topsalario.php">Top Saliario</a></li>
        <li><a href="topalturas.php">Top 5 Alturas</a></li>
      </ul>
    </div>
  </nav>
    <h3>Ejemplo BBDD LIGA</h3>
    <h2>Equipos</h2>
    <table border=1 cellpadding=4 cellspacing=0>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Ciudad </th>
      </tr>
      <?php
      foreach ($resultado as $equipo) {
        echo "<tr>";
        echo "<td>".$equipo['id_equipo']."</td>";
        echo "<td>".$equipo['nombre']."</td>";
        echo "<td>".$equipo['ciudad']."</td>";
        echo "</tr>";
      }
      ?>
    </table>
    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
