<?php
// Conexión a MySQL (ajusta el nombre de la base si es distinto)
$servername = "localhost";
$username = "root"; // usuario por defecto
$password = "";     // contraseña por defecto vacía
$dbname = "cesar adan angel anaya"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Error en la conexión: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];

// Insertar datos
$sql = "INSERT INTO alumnos (nombre, apellidos, edad)
        VALUES ('$nombre', '$apellidos', '$edad')";

if ($conn->query($sql) === TRUE) {
  echo "<h3>✅ Registro insertado correctamente</h3>";
  echo '<a href="mostrar.php">Ver registros</a>';
} else {
  echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
