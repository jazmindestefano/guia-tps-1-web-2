<?php

$colorIfElse = $_POST["colorIfElse"];

    if(isset($_POST["submitIfElse"])) {
        if($colorIfElse == "rojo") {
            echo "<p style='font-size: larger;'>Usted deberia <span style='font-size: larger; color: red'>FRENAR</span></p>";
        } elseif($colorIfElse == "amarillo") {
            echo "<p style='font-size: larger;'>Usted deberia tener <span style='font-size: larger; color: yellow'>PRECAUCION</span></p>";
        } elseif($colorIfElse == "verde") {
            echo "<p style='font-size: larger;'>Usted puede <span style='font-size: larger; color: green'>AVANZAR</span></p>";
        } else {
            echo "<p>estado desconocido</p>";
        }
    }

$colorIfInline = $_POST["colorIfInline"];

    if(isset($_POST["submitIfInline"])) {
        echo ($colorIfInline == "rojo") ? "<p style='font-size: larger;'>Usted deberia <span style='font-size: larger; color: red'>FRENAR</span></p>" :
            (($colorIfInline == "amarillo") ? "<p style='font-size: larger;'>Usted deberia tener <span style='font-size: larger; color: yellow'>PRECAUCION</span></p>" :
                (($colorIfInline == "verde") ?  "<p style='font-size: larger;'>Usted puede <span style='font-size: larger; color: green'>AVANZAR</span></p>" : "estado desconocido"));
    }

$colorSwitch = $_POST["colorSwitch"];

    if(isset($_POST["submitSwitch"])) {
        switch ($colorSwitch) {
            case "rojo":
                echo  "<p style='font-size: larger;'>Usted deberia <span style='font-size: larger; color: red'>FRENAR</span></p>";
                break;
            case "verde":
                echo  "<p style='font-size: larger;'>Usted puede <span style='font-size: larger; color: green'>AVANZAR</span></p>";
                break;
            case "amarillo":
                echo  "<p style='font-size: larger;'>Usted deberia tener <span style='font-size: larger; color: yellow'>PRECAUCION</span></p>";
                break;
            default:
                echo "estado desconocido";
        }
    }
?>


