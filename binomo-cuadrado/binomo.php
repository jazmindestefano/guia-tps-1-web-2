<!DOCTYPE html>
<html>
<head>
    <title>Binomo cuadrado</title>
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

        div, form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            gap: 10px;
        }

        input {
            width: 200px;
            height: 25px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        button {
            cursor: pointer;
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
        <div>
            <h1>Primer binomo funcion de potencia</h1>
            <form method="post" action="binomo.php">
                <label for="nro_aa">Primer numero: </label>
                <input type="number" name="nro_aa" id="nro_aa">
                <label for="nro_aa">Segundo numero: </label>
                <input type="number" name="nro_ab" id="nro_ab"/>
                <button type="submit" name="binomo_uno">Enviar</button>
            </form>
        </div>

        <?php
        $binomo_uno = $_POST["binomo_uno"];
        $nro_aa = $_POST["nro_aa"];
        $nro_ab = $_POST["nro_ab"];

        function binomioCuadradoPerfecto_a($a, $b) {
            $resultado = pow($a, 2) + 2 * $a * $b + pow($b, 2);
            return $resultado;
        }


        if(isset($_POST["binomo_uno"])) {
            echo "<p>El resultado es: </p>" . binomioCuadradoPerfecto_a($nro_aa,$nro_ab);
        }



        ?>

        <div>
            <h1>Segundo binomo funcion desarollada del binomo</h1>
            <form method="post" action="binomo.php">
                <label for="nro_ba">Primer numero: </label>
                <input type="number" name="nro_ba" id="nro_ba">
                <label for="nro_bb">Segundo numero: </label>
                <input type="number" name="nro_bb" id="nro_bb"/>
                <button type="submit" name="binomo_dos">Enviar</button>
            </form>
        </div>


        <?php
        $binomo_dos = $_POST["binomo_dos"];
        $nro_ba = $_POST["nro_ba"];
        $nro_bb = $_POST["nro_bb"];

        function binomioCuadradoPerfecto_b($a, $b) {
            $resultado = pow($a + $b, 2);
            return $resultado;
        }

        if(isset($_POST["binomo_dos"])) {
            echo "<p>El resultado es: </p>" .  binomioCuadradoPerfecto_b($nro_ba,$nro_bb);
        }
        ?>

    </main>

</body>
</html>




