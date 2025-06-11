<?php
$host = "sql10.freesqldatabase.com";
$db = "sql10784268";
$user = "sql10784268";
$pass = "CZ4SKKXmX3";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("❌ Error de conexión: " . $conexion->connect_error);
}

$temperatura = $_GET["temperatura"] ?? null;
$humedad = $_GET["humedad"] ?? null;
$potenciometro = $_GET["potenciometro"] ?? null;

$sql = "INSERT INTO datos_sensor (temperatura, humedad, potenciometro) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ddd", $temperatura, $humedad, $potenciometro);

if ($stmt->execute()) {
    echo "✅ Datos guardados correctamente";
} else {
    echo "❌ Error al guardar: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
