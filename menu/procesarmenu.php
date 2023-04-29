<?php

// Leer los datos del formulario
$pasos = $_POST["pasos"];

// Leer los datos del archivo menu.ini
$menu = parse_ini_file("menu.ini");

// Mostrar en pantalla sólo los pasos del menú que solicitó el comensal
echo "<h1>Menú del día</h1>";
echo "<ul>";
foreach ($pasos as $paso) {
    echo "<li>".$menu[$paso]."</li>";
}
echo "</ul>";

?>

