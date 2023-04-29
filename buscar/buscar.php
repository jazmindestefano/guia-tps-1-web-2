<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Buscar string</title>
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
        <h1>Buscar string</h1>
        <form method="post" action="procesarBuscar.php">
            <label for="clave">Palabra a buscar:</label>
            <input type="text" name="clave" id="clave"><br>
            <label for="texto">Texto:</label><br>
            <textarea name="texto" id="texto" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Buscar">
        </form>
    </main>
</body>
</html>

