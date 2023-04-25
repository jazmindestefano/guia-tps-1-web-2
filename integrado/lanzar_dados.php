<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numDados = $_POST["numDados"];
    $dados = array();
    $suma = 0;
    for ($i = 0; $i < $numDados; $i++) {
        $valor = rand(1, 6);
        $dados[] = $valor;
        $suma += $valor;
    }
    // Redirigir a la página de resultados
    header("Location: resultados.php?dados=" . implode(",", $dados) . "&suma=" . $suma);
    exit;
}
?>
