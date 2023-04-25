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
</head>
<body style="background: beige;">
    <div class="header-container" style="display: flex; align-items: center; justify-content: center;">
        <h1 class="header-title">Jazmin De Stefano - Guia de Ejercicios :)</h1>
    </div>
    <nav style="width: 100%; display: flex; align-items: center; justify-content: center;">
        <ul style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 3%; list-style: none;">
            <li><a style=" text-decoration: none; color: black; font-size: 18px;" href="mostrarImagenes.php">Mostrar Imagenes</a></li>
            <li><a style=" text-decoration: none; color: black; font-size: 18px;"  href="mostrarNombreImagenes.php"">Mostrar nombre de imagenes</a></li>
            <li><a style=" text-decoration: none; color: black; font-size: 18px;"  href="lanzarDados.php">Lanzar Dados</a></li>
            <li><a style=" text-decoration: none; color: black; font-size: 18px;"  href="#">Ejercicio 4</a></li>
            <li><a style=" text-decoration: none; color: black; font-size: 18px;"  href="#">Ejercicio 5</a></li>
        </ul>
    </nav>


