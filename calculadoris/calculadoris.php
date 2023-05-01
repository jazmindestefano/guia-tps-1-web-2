<?php
require_once "Multiplicar.php";
require_once "Operando.php";
require_once "Restar.php";
require_once "Sumar.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Piedra, Papel o Tijera</title>
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
    <h1>Calcula Doris</h1>
    <form method="post">
        <label for="operando1">Operando 1:</label>
        <input type="number" name="operando1" id="operando1">

        <label for="operando2">Operando 2:</label>
        <input type="number" name="operando2" id="operando2">

        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
        </select>

        <button type="submit">Resolver</button>
    </form>

</main>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtenemos los operandos y la operación del formulario
    $operando1 = $_POST["operando1"];
    $operando2 = $_POST["operando2"];
    $operacion = $_POST["operacion"];

    // Creamos los objetos correspondientes
    $op1 = new Operando($operando1);
    $op2 = new Operando($operando2);

    switch ($operacion) {
        case "sumar":
            $resultado = (new Sumar($op1, $op2))->resolverEcuacion();
            break;

        case "restar":
            $resultado = (new Restar($op1, $op2))->resolverEcuacion();
            break;

        case "multiplicar":
            $resultado = (new Multiplicar($op1, $op2))->resolverEcuacion();
            break;

        default:
            // Si la operación es inválida, mostramos un error
            echo "Operación inválida";
            exit;
    }

    // Imprimimos el resultado
    echo "<div style='width: 100%; text-align: center; color: white; font-size: 20px'>";
    echo "<p>El resultado de la operación es: $resultado </p>";
    echo "</div>";
}

?>
</html>


