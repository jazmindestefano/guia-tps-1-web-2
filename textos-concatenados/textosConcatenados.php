<!DOCTYPE html>
<html>
<head>
    <title>Textos concatenados</title>
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

            <h1 class="title">Textos concatenados</h1>
            <form method="post" action="textosConcatenados.php">
                <label for="primerTexto">Primer texto:</label>
                <input type="text" name="primerTexto" id="primerTexto">
                <label for="segundoTexto">Segundo texto:</label>
                <input type="text" name="segundoTexto" id="segundoTexto">
                <input type="submit" name="submitTexto" value="Enviar">
            </form>

    </main>

<?php

$primerTexto = $_POST["primerTexto"];
$segundoTexto = $_POST["segundoTexto"];

function concatenar($texto1, $texto2) {
    $resultado = $texto1 . " " . $texto2;
    return "<p style='font-size: 18px; color: white'>Texto concatenado es: </p>" . "<p style='font-size: 18px; color: white'>$resultado</p>";
}

if(isset($_POST["submitTexto"])) {
    echo concatenar($primerTexto, $segundoTexto);
} ?>

</body>
</html>

