<?php
function buscar($clave, $texto) {
    $contador = 0;
    $clave_len = strlen($clave);
    $texto_len = strlen($texto);
    $i = 0;
    while ($i < $texto_len) {
        if (substr($texto, $i, $clave_len) == $clave) {
            $contador++;
            $i += $clave_len;
        } else {
            $i++;
        }
    }
    return $contador;
}


if (isset($_POST['clave']) && isset($_POST['texto'])) {
    $clave = $_POST['clave'];
    $texto = $_POST['texto'];
    $ocurrencias = buscar($clave, $texto);
    echo "La palabra '$clave' aparece $ocurrencias veces en el texto.";
}

