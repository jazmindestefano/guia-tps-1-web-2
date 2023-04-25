<?php

if(isset($_POST['submit']) && isset($_FILES['imagen'])){
    echo "<pre>";
    print_r($_FILES['imagen']);
    echo "</pre>";

    $img_name = $_FILES['imagen']['name'];
    $img_size = $_FILES['imagen']['size'];
    $img_tmp_name = $_FILES['imagen']['tmp_name'];
    $error = $_FILES['imagen']['error'];

    $ruta_archivo = "imagenes/" . $img_name;

    if (move_uploaded_file($img_tmp_name, $ruta_archivo)) {
        echo '<p>La imagen se cargó correctamente.</p>';
        echo '<img src="' . $ruta_archivo . '">';
    } else {
        echo '<p>Ocurrió un error al cargar el archivo.</p>';
    }

    echo "<pre>";
    print_r($img_name);
    echo "</pre>";
    echo "<pre>";
    print_r($img_size);
    echo "</pre>";
    echo "<pre>";
    print_r($img_tmp_name);
    echo "</pre>";

} else {
    header("Location: index.php");
}
