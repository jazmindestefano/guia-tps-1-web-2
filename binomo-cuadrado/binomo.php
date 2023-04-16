<?php

$binomo_uno = $_POST["binomo_uno"];
$nro_aa = $_POST["nro_aa"];
$nro_ab = $_POST["nro_ab"];


$binomo_dos = $_POST["binomo_dos"];
$nro_ba = $_POST["nro_ba"];
$nro_bb = $_POST["nro_bb"];


function binomioCuadradoPerfecto_a($a, $b) {
    $resultado = pow($a, 2) + 2 * $a * $b + pow($b, 2);
    return $resultado;
}

function binomioCuadradoPerfecto_b($a, $b) {
    $resultado = pow($a + $b, 2);
    return $resultado;
}



if(isset($_POST["binomo_uno"])) {
    echo "<p>El resultado es: </p>" . binomioCuadradoPerfecto_a($nro_aa,$nro_ab);
}


if(isset($_POST["binomo_dos"])) {
    echo "<p>El resultado es: </p>" .  binomioCuadradoPerfecto_b($nro_ba,$nro_bb);
}



