<!DOCTYPE html>
<html>
<head>
    <title>Juego Packman</title>
</head>
<body>
<h1>Juego Packman</h1>
<p>Selecciona contra qué objeto chocará Packman:</p>
<form action="" method="post">
    <input type="radio" name="objeto" value="fantasma" required> Fantasma<br>
    <input type="radio" name="objeto" value="fantasma_comestible"> Fantasma comestible<br>
    <input type="radio" name="objeto" value="pildora"> Píldora<br>
    <br>
    <input type="submit" value="Jugar">
</form>
</body>

<?php
require_once('Packman.php');
$objeto = $_POST['objeto'];

$packman = new Packman();

try {
    if ($objeto == 'fantasma') {
        $elemento = new Fantasma();
    } else if ($objeto == 'fantasma_comestible') {
        $elemento = new FantasmaComestible();
    } else if ($objeto == 'pildora') {
        $elemento = new Pildora();
    }

    $packman->chocaContra($elemento);
    echo "Partida activa - " . $packman->getPuntos() . " puntos - " . $packman->getVidas() . " vidas";
} catch (FinPartida $e) {
    echo "Fin de la partida - " . $e->getPuntos() . " puntos obtenidos";
}
?>
</html>


