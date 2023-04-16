<?php

// Función sumatoria_a
function sumatoria_a($array) {
    $suma = 0;
    $longitud = count($array);
    for ($i = 0; $i < $longitud; $i++) {
        $suma += $array[$i];
    }
    return $suma;
}

// Función sumatoria_b
function sumatoria_b($array) {
    $suma = 0;
    foreach ($array as $valor) {
        $suma += $valor;
    }
    return $suma;
}

// Función sumatoria_c
function sumatoria_c($array) {
    $suma = 0;
    $longitud = count($array);
    $i = 0;
    while ($i < $longitud) {
        $suma += $array[$i];
        $i++;
    }
    return $suma;
}

if (isset($_POST['numeros'])) {
    $numeros = explode(",", $_POST['numeros']);

    // Llama a cada una de las funciones sumatoria
    echo "<p>La suma utilizando control for es: " . sumatoria_a($numeros) . "</p>";
    echo "<p>La suma utilizando control for each es: " . sumatoria_b($numeros) . "</p>";
    echo "<p>La suma utilizando control while es: " . sumatoria_c($numeros) . "</p>";
}
