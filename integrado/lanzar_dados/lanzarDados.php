<?php include '../common/header.php'; ?>


<div  style="width: 100%; height: 650px; display: flex; align-items: center; justify-content: center; ">
    <form method="post" action="lanzar_dados.php">
        <label for="numDados">Número de dados:</label>
        <select id="numDados" name="numDados">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit">Lanzar dados</button>
    </form>
</div>


<?php include '../common/footer.php'; ?>
