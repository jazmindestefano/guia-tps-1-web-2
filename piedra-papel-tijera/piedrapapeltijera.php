<?php
require_once "piedra.php";
require_once "papel.php";
require_once "tijera.php";
require_once "empate.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Piedra, Papel o Tijera</title>
    <style>
        body {
            background: #1f2c34;
            width: 100vw;
            height: 100vh;
        }

        main {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            color: white;
        }


        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
        }
    </style>
</head>
<body>

<header style="width: 100%; height: 100px">
    <button style="width: 100px; height: 50px; border-radius: 10px">
        <a href="../index.html" style="text-decoration: none; color: black">Menu principal</a>
    </button>
</header>

<main>
    <h1>Piedra, Papel o Tijera</h1>
    <form method="post">
        <label for="jugador1">Jugador 1:</label>
        <select name="jugador1">
            <option value="piedra">Piedra</option>
            <option value="papel">Papel</option>
            <option value="tijera">Tijera</option>
        </select>
        <br>
        <label for="jugador2">Jugador 2:</label>
        <select name="jugador2">
            <option value="piedra">Piedra</option>
            <option value="papel">Papel</option>
            <option value="tijera">Tijera</option>
        </select>
        <br>
        <input type="submit" value="Jugar">
    </form>
</main>


<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las selecciones de los jugadores
    $seleccionJ1 = $_POST["jugador1"];
    $seleccionJ2 = $_POST["jugador2"];

    // Crear los objetos correspondientes a las selecciones
    switch ($seleccionJ1) {
        case "piedra":
            $j1 = new Piedra("Jugador 1");
            break;
        case "papel":
            $j1 = new Papel("Jugador 1");
            break;
        case "tijera":
            $j1 = new Tijera("Jugador 1");
            break;
    }

    switch ($seleccionJ2) {
        case "piedra":
            $j2 = new Piedra("Jugador 2");
            break;
        case "papel":
            $j2 = new Papel("Jugador 2");
            break;
        case "tijera":
            $j2 = new Tijera("Jugador 2");
            break;
    }

    // Competir y determinar el ganador
    $resultado = $j1->competirContra($j2);
    $ganador = $resultado->ganador();

    // Mostrar el resultado
    echo "<div style='width: 100%; text-align: center'>";
    echo "<p style='color: white; font-size: 20px'>El ganador es: $ganador</p>";
    echo "</div>";
}
?>
</body>
</html>

