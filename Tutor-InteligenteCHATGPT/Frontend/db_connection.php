<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "chatbotgpt";

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa<br>";

// Cerrar la conexión
//mysqli_close($conn);
?>