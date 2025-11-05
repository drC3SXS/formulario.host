<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cesar adan angel anaya";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registros</title>
</head>
<body>
  <center>
    <h2>Lista de Personas Registradas</h2>
    <table border="1" cellpadding="10">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Edad</th>
      </tr>

      <?php
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>".$row['id']."</td>
                  <td>".$row['nombre']."</td>
                  <td>".$row['apellidos']."</td>
                  <td>".$row['edad']."</td>
                </tr>";
        }
      } else {
        echo "<tr><td colspan='4'>No hay registros</td></tr>";
      }
      ?>

    </table>
    <br>
    <a href="formulario.html">Volver al formulario</a>
  </center>
</body>
</html>

<?php
$conn->close();
?>
