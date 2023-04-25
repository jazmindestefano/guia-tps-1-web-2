<?php include 'header.php'; ?>

<div class="body-container">
    <h2> Mis imágenes </h2>

    <?php
    // Ruta de la carpeta que contiene las imágenes
    $ruta = "imagenes/";

    // Obtener todas las imágenes de la carpeta
    $imagenes = glob($ruta . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

    // Mostrar cada imagen con su nombre de archivo como pie de imagen
    echo '<div style="width: 100%; display: flex; align-items: center; justify-content: space-around">';
    foreach ($imagenes as $imagen) {
        echo '<div>';
        echo '<img style="width=300px; height:250px" src="' . $imagen . '" alt="' . basename($imagen) . '">';
        echo '<p>' . basename($imagen) . '</p>';
        echo '</div>';
    }
    echo '</div>';
    ?>

    <?php
    if (isset($_POST['submit'])) {
       echo "<p>submit</p>";


    }
    ?>

    <h2> Cargar nueva imagen </h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>


</div>

<?php include 'footer.php'; ?>


<!-- <iframe src='pdfs/ejercicio9.png' style="width: 1300px; height: 500px"/> -->

