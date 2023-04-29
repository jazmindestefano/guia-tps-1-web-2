<!DOCTYPE html>
<html>
<head>
    <title>Incrementar</title>
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
    <form method="post" action="">
        <label for="numDados">Número de dados:</label>
        <select id="numDados" name="numDados">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit">Lanzar dados</button>
    </form>
</main>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numDados = $_POST["numDados"];
    $dados = array();
    $suma = 0;
    for ($i = 0; $i < $numDados; $i++) {
        $valor = rand(1, 6);
        $dados[] = $valor;
        $suma += $valor;
    }
    // Redirigir a la página de resultados
    header("Location: resultados.php?dados=" . implode(",", $dados) . "&suma=" . $suma);
    exit;
}
?>

</body>
</html>



