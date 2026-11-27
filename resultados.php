
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

echo "<h2>Destinos seleccionados</h2>";

if (count($destinos) > 0) {
    foreach ($destinos as $d) {
        echo $d . "<br>";
    }
} else {
    echo "No seleccionaste ningún elemento";
}

echo "<br>Total de destinos: " . count($destinos);

echo "<h2>Actividades seleccionadas</h2>";

if (count($actividades) > 0) {
    foreach ($actividades as $a) {
        echo $a . "<br>";
    }
} else {
    echo "No seleccionaste ningún elemento";
}

echo "<br>Total de actividades: " . count($actividades);

echo "<h2>Servicios adicionales</h2>";

if (count($servicios) > 0) {
    foreach ($servicios as $s) {
        echo $s . "<br>";
    }
} else {
    echo "No seleccionaste ningún elemento";
}

echo "<br>Total de servicios: " . count($servicios);

$total = count($destinos) + count($actividades) + count($servicios);

echo "<h2>Total general: " . $total . "</h2>";

?>

<br>
<a href="index.php">Regresar</a>

</body>
</html>
