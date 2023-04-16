<?php

$primerTexto = $_POST["primerTexto"];
$segundoTexto = $_POST["segundoTexto"];

function concatenar($texto1, $texto2) {
    $resultado = $texto1 . " " . $texto2;
    return "<p style='font-size: larger'>Texto concatenado es: </p>" . "<p style='font-size: larger'>$resultado</p>";
}

if(isset($_POST["submitTexto"])) {
    echo concatenar($primerTexto, $segundoTexto);
}