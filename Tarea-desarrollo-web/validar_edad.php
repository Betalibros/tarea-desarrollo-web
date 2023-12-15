<?php
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];

    if($edad < 18) {
        echo "<h1> $nombre es menor de edad</h1>";
    } else {
        echo "<h1> $nombre es mayor de edad</h1>";
    }
?>