<?php include 'header.php'; ?>

<div class="body-container">
    <h2> Mis imágenes </h2>

    <?php
    // Ruta de la carpeta que contiene las imágenes
    $ruta = "imagenes/";

    // Obtener todas las imágenes de la carpeta
    $imagenes = glob($ruta . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

    // Mostrar cada imagen con su nombre de archivo como pie de imagen
    foreach ($imagenes as $imagen) {
        echo '<img style="width=300px; height:250px" src="' . $imagen . '" alt="' . basename($imagen) . '">';
        echo '<p>' . basename($imagen) . '</p>';
    }
    ?>

    <?php
    if (isset($_POST['submit'])) {
       echo "<p>submit</p>";


    }
    ?>

    <h2> Cargar nueva imagen </h2>
    <form action="ejercicio1.php" method="post" enctype="multipart/form-data">

        <label for="imagen">Seleccione una imagen:</label>
        <input type="file" name="imagen" id="imagen"><br>

        <input type="submit" name="submit" value="Cargar imagen">
    </form>

</div>

<?php include 'footer.php'; ?>


<!-- <iframe src='pdfs/ejercicio9.png' style="width: 1300px; height: 500px"/> -->

