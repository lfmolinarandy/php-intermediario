<?php
$servername = "sql204.infinityfree.com";
$username = "if0_37787691";
$password = "YNBYRFGy0NQ1eow";
$dbname = "if0_37787691_SCADA_PLC";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Validar que los datos están presentes
if(isset($_POST['sensor_TEMP']) && isset($_POST['sensor_HUMEDAD'])){
    $sensor_TEMP = $conn->real_escape_string($_POST['sensor_TEMP']);
    $sensor_HUMEDAD = $conn->real_escape_string($_POST['sensor_HUMEDAD']);
} else {
    die("Faltan datos necesarios.");
}

// Consulta SQL
$sql = "INSERT INTO PLC_SCADA_TANK (sensor_TEMP, sensor_HUMEDAD) VALUES ('$sensor_TEMP', '$sensor_HUMEDAD')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
