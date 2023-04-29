<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Matriz Cuadrada</title>
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
    <header style="width: 100%; height: 100px">
        <button style="width: 100px; height: 50px; border-radius: 10px">
            <a href="../index.html" style="text-decoration: none; color: black">Menu principal</a>
        </button>
    </header>

</header>
<main>
    <h1>Matriz Cuadrada</h1>
    <form action="procesarMatrix.php" method="post">
        <label for="dimension">Ingrese la dimensión de la matriz:</label>
        <input type="number" id="dimension" name="dimension" min="1" max="10" required><br><br>
        <input type="submit" value="Crear Matriz">
    </form>
</main>
</body>
</html>

