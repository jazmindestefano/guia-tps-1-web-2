<?php

// Leer la dimensión de la matriz
$dimension = $_POST["dimension"];

// Crear la matriz de NxN
$matriz = array();
for ($i=0; $i<$dimension; $i++) {
    $fila = array();
    for ($j=0; $j<$dimension; $j++) {
        $fila[] = $i*$dimension+$j+1;
    }
    $matriz[] = $fila;
}

// Recorrer la matriz con un sólo FOR y mostrar la diagonal principal
echo "<h2>Diagonal Principal</h2>";
for ($i=0; $i<$dimension; $i++) {
    echo $matriz[$i][$i]."<br>";
}

// Recorrer la matriz con un sólo FOR y mostrar la diagonal secundaria
echo "<h2>Diagonal Secundaria</h2>";
for ($i=0; $i<$dimension; $i++) {
    echo $matriz[$i][$dimension-$i-1]."<br>";
}

// Recorrer la matriz y sumar todos los valores
$total = 0;
for ($i=0; $i<$dimension; $i++) {
    for ($j=0; $j<$dimension; $j++) {
        $total += $matriz[$i][$j];
    }
}

// Mostrar la suma total de los valores
echo "<h2>Suma Total</h2>";
echo $total;

?>

