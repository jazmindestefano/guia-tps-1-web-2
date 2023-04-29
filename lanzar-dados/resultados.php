<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $dados = explode(",", $_GET["dados"]);
    $suma = $_GET["suma"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultados del lanzamiento de dados</title>
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
    </style>
</head>
<body>
    <header>
        <h1>Resultados del lanzamiento de dados</h1>
    </header>
    <main>
        <p>Dados: <?php echo implode(", ", $dados); ?></p>
        <p>Suma: <?php echo $suma; ?></p>
    </main>
</body>
</html>

