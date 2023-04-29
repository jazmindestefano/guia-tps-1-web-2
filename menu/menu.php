<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Menú del día</title>
    <style>
        body {
            background: #1f2c34;
            width: 100vw;
            height: 100vh;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: start;
            flex-direction: column;
            color: white;
        }
    </style>
</head>
<body>
<header>
    <h1>Menú del día</h1>
</header>
<main>
    <form action="procesarmenu.php" method="post">
        <label for="entrada">Entrada:</label>
        <input type="checkbox" id="entrada" name="pasos[]" value="entrada"><br><br>
        <label for="plato">Plato principal:</label>
        <input type="checkbox" id="plato" name="pasos[]" value="plato_principal"><br><br>
        <label for="acompanamiento">Acompañamiento:</label>
        <input type="checkbox" id="acompanamiento" name="pasos[]" value="acompanamiento"><br><br>
        <label for="postre">Postre:</label>
        <input type="checkbox" id="postre" name="pasos[]" value="postre"><br><br>
        <input type="submit" value="Enviar">
    </form>
</main>
</body>
</html>

