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

        <h1 class="title">Incrementar</h1>
        <form method="post" action="incrementar.php">
            <label for="variable">Variable:</label>
            <input type="text" name="variable" id="variable" value="">
            <button type="submit">Incrementar</button>
        </form>
    </main>

    <?php

    function incrementar(&$variable) {
        $variable++;
    }

    if (isset($_POST['variable'])) {
        $variable = $_POST['variable'];
        incrementar($variable);
        echo "La variable se ha incrementado a: " . $variable;
    } ?>

</body>
</html>

