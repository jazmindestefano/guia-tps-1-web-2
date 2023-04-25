<?php
// Ruta de la carpeta donde se guardan las imágenes
$ruta = "/imagenes";

// Obtener el nombre y la ruta temporal del archivo cargado
$nombre_archivo = $_FILES["archivo"]["name"];
$ruta_archivo = $_FILES["archivo"]["tmp_name"];

// Obtener el nombre especificado por el usuario para la nueva imagen
$nuevo_nombre = $_POST["nombre"];

// Renombrar el archivo cargado con el nombre especificado por el usuario
$extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);
$nuevo_nombre_archivo = $nuevo_nombre . '.' . $extension;

// Mover el archivo cargado a la carpeta de imágenes con el nombre especificado
move_uploaded_file($ruta_archivo, $ruta . $nuevo_nombre_archivo);

// Redireccionar de vuelta a la página de imágenes
header('Location: mostrar-imagenes.php');
exit;
?>

