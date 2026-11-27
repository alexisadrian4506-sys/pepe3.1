<html>
<head>
    <title>Agencia de viajes</title>
</head>
<body>

<h1>Agencia de viajes</h1>
<h2>Arma tu paquete turistico</h2>

<form action="resultados.php" method="POST">

Nombre:
<input type="text" name="nombre" required>
<br><br>

Correo:
<input type="email" name="correo" required>
<br><br>

<h3>Destinos</h3>

<select name="destinos[]" multiple>
    <option value="Cancun">Cancun</option>
    <option value="Puerto Vallarta">Puerto Vallarta</option>
    <option value="Acapulco">Acapulco</option>
    <option value="Los Cabos">Los Cabos</option>
    <option value="Mazatlan">Mazatlan</option>
    <option value="Huatulco">Huatulco</option>
    <option value="Puerto Escondido">Puerto Escondido</option>
</select>

<p>Usa Ctrl para elegir varios destinos.</p>

<h3>Actividades</h3>

<input type="checkbox" name="actividades[]" value="Buceo"> Buceo<br>
<input type="checkbox" name="actividades[]" value="Paseo en lancha"> Paseo en lancha<br>
<input type="checkbox" name="actividades[]" value="Zonas arqueologicas"> Zonas arqueologicas<br>
<input type="checkbox" name="actividades[]" value="Senderismo"> Senderismo<br>
<input type="checkbox" name="actividades[]" value="Pesca deportiva"> Pesca deportiva<br>
<input type="checkbox" name="actividades[]" value="Recorrido gastronomico"> Recorrido gastronomico<br>
<input type="checkbox" name="actividades[]" value="Museos"> Museos<br>

<h3>Servicios adicionales</h3>

<input type="checkbox" name="servicios[]" value="Transporte"> Transporte al aeropuerto<br>
<input type="checkbox" name="servicios[]" value="Desayuno"> Desayuno incluido<br>
<input type="checkbox" name="servicios[]" value="Hospedaje"> Hospedaje de lujo<br>
<input type="checkbox" name="servicios[]" value="Seguro"> Seguro de viajero<br>
<input type="checkbox" name="servicios[]" value="Automovil"> Renta de automovil<br>
<input type="checkbox" name="servicios[]" value="Guia"> Guia turistico<br>

<br>

<input type="submit" value="Generar paquete">

</form>

</body>
</html>