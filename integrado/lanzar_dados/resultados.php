<?php include '../common/header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $dados = explode(",", $_GET["dados"]);
    $suma = $_GET["suma"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultados del lanzamiento de dados</title>
</head>
<body>
    <div  style="width: 100%; height: 650px; display: flex; align-items: center; justify-content: center; flex-direction: column">
        <h1>Resultados del lanzamiento de dados</h1>
        <p>Dados: <?php echo implode(", ", $dados); ?></p>
        <p>Suma: <?php echo $suma; ?></p>
    </div>
</body>
</html>

<?php include '../common/footer.php'; ?>

