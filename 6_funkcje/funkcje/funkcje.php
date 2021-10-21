<?php
function show(){ //wyświetla dane
    echo "Funkcja show <br>";
}

function showName($name){
    return "Imię: ".$name;
}

function stringValidate($name){
    $name = ucfirst(strtolower(trim($name)));
    $length=strlen($name);
    echo "<br>Długość twojego imienia: ".$length;
    $namee= substr($name,0,2);
    echo "<br>Imię po zmianie:".$name;
    echo "<br> Imię po skróceniu:".$namee;
}

    ?>

