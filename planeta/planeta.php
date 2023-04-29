<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Control interplanetario</title>
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
        <h1>Control interplanetario</h1>
    </header>
    <main>
        <form action="procesar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"><br><br>
            <label for="planeta">Planeta:</label>
            <select id="planeta" name="planeta">
                <option value="Marte">Marte</option>
                <option value="Jupiter">Júpiter</option>
                <option value="Saturno">Saturno</option>
                <option value="Urano">Urano</option>
                <option value="Neptuno">Neptuno</option>
            </select><br><br>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>


