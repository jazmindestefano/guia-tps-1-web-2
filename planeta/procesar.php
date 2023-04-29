<?php

// Leer los datos del formulario
$nombre = $_POST["nombre"];
$planeta = $_POST["planeta"];

// Leer los datos almacenados en el archivo JSON
$datos = file_get_contents("visitas.json");
$visitas = json_decode($datos, true);

// Añadir una nueva visita al array
$visitas[] = array("nombre" => $nombre, "planeta" => $planeta);

// Escribir los datos actualizados al archivo JSON
file_put_contents("visitas.json", json_encode($visitas));

// Contar el número de visitas que no pertenecen al planeta Tierra
$numVisitas = 0;
foreach ($visitas as $visita) {
    if ($visita["planeta"] != "Tierra") {
        $numVisitas++;
    }
}

// Mostrar los datos en una nueva página
echo "<h1>Listado de visitantes</h1>";
echo "<ul>";
foreach ($visitas as $visita) {
    echo "<li>".$visita["nombre"]." - ".$visita["planeta"]."</li>";
}
echo "</ul>";
echo "<p>Número total de visitas que no pertenecen al planeta Tierra: ".$numVisitas."</p>";

?>

