<!DOCTYPE html>
<html>
<head>
    <title>Sumatoria</title>
    <style>
        body {
            background: #1f2c34;
            width: 100vw;
            height: 100vh;
        }

        .body-container {
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

    <main class="body-container">
        <h1 class="title">Sumatoria</h1>
        <form action="sumatoria.php" method="post">
            <label for="numeros">Ingrese una lista de numeros separados por comas:</label>
            <input type="text" name="numeros" id="numeros" required>
            <br><br>
            <input type="submit" value="Calcular suma">
        </form>
    </main>
</body>


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
 ?>
</html>
