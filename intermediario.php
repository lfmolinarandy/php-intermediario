<?php
// URL del archivo PHP en InfinityFree
$infinityFreeUrl = "https://scadaplc.infinityfreeapp.com/insertar_datos.php"; // Cambia esto por tu URL en InfinityFree

// Datos recibidos desde la ESP32
$sensor_TEMP = $_POST['sensor_TEMP'];
$sensor_HUMEDAD = $_POST['sensor_HUMEDAD'];

// Crear una solicitud POST para reenviar los datos a InfinityFree
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $infinityFreeUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    'sensor_TEMP' => $sensor_TEMP,
    'sensor_HUMEDAD' => $sensor_HUMEDAD
)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la solicitud
$response = curl_exec($ch);
curl_close($ch);

// Responder a la ESP32
if ($response !== false) {
    echo "Datos enviados correctamente";
} else {
    echo "Error al enviar datos";
}
?>
