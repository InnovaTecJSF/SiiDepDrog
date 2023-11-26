<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "software";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta a la base de datos
$sql = "SELECT * FROM tabla";
$result = $conn->query($sql);

// Cerrar la conexión
$conn->close();
?>
