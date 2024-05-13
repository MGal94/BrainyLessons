<?php
// Conexión a la base de datos MySQL
$servername = "localhost";
$username = "tu_usuario_mysql";
$password = "tu_contraseña_mysql";
$database = "tu_base_de_datos_mysql";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recibir datos del formulario de inicio de sesión
$username = $_POST["username"];
$password = $_POST["password"];

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si las credenciales son válidas, enviar una respuesta JSON de éxito
    echo json_encode(array("success" => true));
} else {
    // Si las credenciales no son válidas, enviar una respuesta JSON de fallo
    echo json_encode(array("success" => false));
}

$conn->close();
?>
