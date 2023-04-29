<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nombre Completo</title>
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
            padding-bottom: 50px;
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
        <h1 class="title">Saludos</h1>
        <form method="post" action="">

            <div style="display: flex; flex-direction: column; gap: 20px">
                <div style="display: flex; flex-direction: row">
                    <label for="nombre">Ingrese su nombre:</label>
                    <input name="nombre" id="nombre" type="text"/>
                </div>
                <div style="display: flex; flex-direction: row">
                    <label for="apellido">Ingrese su apellido:</label>
                    <input type="text" name="apellido" id="apellido"/>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; margin-top: 20px; gap: 20px">
                <label for="horarioFormal">Ingrese un horario para un saludo formal: </label>
                <input type="text" name="horarioFormal" id="horarioFormal"/>
                <button type="submit" name="submitFormal">Enviar</button>
            </div>

            <div style="display: flex; flex-direction: column; margin-top: 20px; gap: 20px">
                <label for="horarioInformal">Ingrese un horario para un saludo informal: </label>
                <input type="text" name="horarioInformal" id="horarioInformal"/>
                <button type="submit" name="submitInformal">Enviar</button>
            </div>

        </form>
    </main>
</body>


<?php

class Saludar {
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario) {
        if ($horario >= 5 && $horario < 13) {
            $saludo = "Buenos días";
        } elseif ($horario >= 13 && $horario < 21) {
            $saludo = "Buenas tardes";
        } else {
            $saludo = "Buenas noches";
        }
        return "$saludo $this->nombre $this->apellido";
    }

    public function saludoInformal($horario) {
        if ($horario >= 5 && $horario < 13) {
            $saludo = "buen día";
        } elseif ($horario >= 13 && $horario < 21) {
            $saludo = "buena tarde";
        } else {
            $saludo = "buena noche";
        }
        return "¡Hola $this->nombre! Que tengas $saludo";
    }
}

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$horarioFormal = $_POST["horarioFormal"];
$horarioInformal = $_POST["horarioInformal"];

$saludar = new Saludar($nombre, $apellido);

if(isset($_POST["submitFormal"])) {
    $saludoFormal = $saludar->saludoFormal($horarioFormal);
    echo $saludoFormal;
}


if(isset($_POST["submitInformal"])) {
    $saludoInformal = $saludar->saludoInformal($horarioInformal);
    echo $saludoInformal;
}

?>

</html>

