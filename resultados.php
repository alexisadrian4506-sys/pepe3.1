
<html>
<head>
    <title>Resultado</title>
</head>
<body>

<h1>Tu paquete turistico</h1>

<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];

$destinos = $_POST["destinos"] ?? [];
$actividades = $_POST["actividades"] ?? [];
$servicios = $_POST["servicios"] ?? [];

echo "<h2>Datos del cliente</h2>";
echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
echo "Correo: " . htmlspecialchars($correo) . "<br>";

