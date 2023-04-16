<?php

function incrementar(&$variable) {
    $variable++;
}

if (isset($_POST['variable'])) {
    $variable = $_POST['variable'];
    incrementar($variable);
    echo "La variable se ha incrementado a: " . $variable;
}