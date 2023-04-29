<!DOCTYPE html>
<html>
    <head>
        <title>Semaforo</title>
        <style>
            .body-container {
                background: #1f2c34;
                width: 100vw;
                height: 100vh;
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-direction: column;
            }

            h1, label {
                color: white;
                font-size: 20px;
            }

            input {
                height: 15px;
                width: 200px;
                border-radius: 30px;
                padding: 10px;
            }

            button {
                width: 70px;
                height: 25px;
                border-radius: 6px;
                cursor: pointer;
            }

            form {
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 10px;
            }

        </style>
    </head>
    <body class="body-container">

    <div>
        <h1>Funcion semaforo if-else</h1>
        <form method="post" action="">
            <label for="colorIfElse">Color:</label>
            <input type="text" name="colorIfElse" id="colorIfElse">
            <button type="submit" name="submitIfElse">Enviar</button>
        </form>
    </div>

    <?php
        $colorIfElse = $_POST["colorIfElse"];

        if(isset($_POST["submitIfElse"])) {
            if($colorIfElse == "rojo") {
                echo "<p style='font-size: 18px; color: red'>Usted deberia frenar.</p>";
            } elseif($colorIfElse == "amarillo") {
                echo "<p style='font-size: 18px; color: burlywood'>Usted deberia tener precaucion.</p>";
            } elseif($colorIfElse == "verde") {
                echo "<p style='font-size: 18px; color: green'>Usted puede avanzar.</p>";
            } else {
                echo "<p>estado desconocido</p>";
            }
        }
    ?>

    <div>
        <h1>Funcion semaforo if-inline</h1>
        <form method="post" action="">
            <label for="colorIfInline">Color:</label>
            <input type="text" name="colorIfInline" id="colorIfInline">
            <button type="submit" name="submitIfInline">Enviar</button>
        </form>
    </div>

    <?php
        $colorIfInline = $_POST["colorIfInline"];

        if(isset($_POST["submitIfInline"])) {
            echo ($colorIfInline == "rojo") ? "<p style='font-size: 18px; color: red'>Usted deberia frenar.</p>" :
                (($colorIfInline == "amarillo") ? "<p style='font-size: 18px; color: burlywood'>Usted deberia tener precaucion.</p>" :
                    (($colorIfInline == "verde") ?  "<p style='font-size: 18px; color: green'>Usted puede avanzar.</p>" : "estado desconocido"));
        }
    ?>

    <div>
        <h1>Funcion semaforo switch</h1>
        <form method="post" action="">
            <label for="colorSwitch">Color:</label>
            <input type="text" name="colorSwitch" id="colorSwitch">
            <button type="submit" name="submitSwitch">Enviar</button>
        </form>
    </div>

    </body>

    <?php
        $colorSwitch = $_POST["colorSwitch"];

        if(isset($_POST["submitSwitch"])) {
            switch ($colorSwitch) {
                case "rojo":
                    echo  "<p style='font-size: 18px; color: red'>Usted deberia frenar.</p>";
                    break;
                case "verde":
                    echo  "<p style='font-size: 18px; color: green'>Usted puede avanzar.</p>";
                    break;
                case "amarillo":
                    echo  "<p style='font-size: 18px; color: burlywood'>Usted deberia tener precaucion.</p>";
                    break;
                default:
                    echo "estado desconocido";
            }
        }
    ?>

</html>

