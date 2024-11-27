<?php
$servername = "sql204.infinityfree.com"; // Cambia esto por el servidor de tu base de datos
$username = "if0_37787691"; // Cambia esto por tu nombre de usuario
$password = "YNBYRFGy0NQ1eow"; // Cambia esto por tu contraseña
$dbname = "if0_37787691_SCADA_PLC"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Datos enviados desde el ESP32
$sensor_TEMP = $_POST['sensor_TEMP']; // Temperatura
$sensor_HUMEDAD = $_POST['sensor_HUMEDAD']; // Humedad

// Consulta SQL
$sql = "INSERT INTO PLC_SCADA_TANK (sensor_TEMP, sensor_HUMEDAD) VALUES ('$sensor_TEMP', '$sensor_HUMEDAD')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
