<?php
$ejercicio = '';
if(isset($_GET['ejercicio'])) {
    $ejercicio = $_GET['ejercicio'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jazmin De Stefano</title>
    <link rel="stylesheet" href="../integrado.css">

</head>
<body>
    <div class="header-container">
        <h1 class="header-title">Jazmin De Stefano - Guia de Ejercicios :)</h1>
    </div>
    <nav>
        <ul>
            <li><a href="../mostrarImagenes.php">Mostrar Imagenes</a></li>
            <li><a href="../mostrarNombreImagenes.php">Mostrar nombre de imagenes</a></li>
            <li><a href="../lanzar_dados/lanzarDados.php">Lanzar Dados</a></li>
            <li><a href="#">Ejercicio 4</a></li>
            <li><a href="#">Ejercicio 5</a></li>
        </ul>
    </nav>


