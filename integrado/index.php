<?php
// Define la URL del archivo PDF que deseas cargar en el iframe
$pdf_url = 'https://ejemplo.com/archivo.pdf';
?>

<?php include 'header.php'; ?>

<?php
if(isset($ejercicio)) {
    $archivo_ejercicio = "ejercicio$ejercicio.php";
    if(file_exists($archivo_ejercicio)) {
        include $archivo_ejercicio;
    } else {
        echo "<p>No se encontró el archivo del ejercicio.</p>";
    }
} else {
    echo '<p>aca deberia ir un pdf con los ejercicios</p>';
}
?>



<?php include 'footer.php'; ?>



