<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bdname = "Equipo";

    $conn = new mysqli($servidor,$usuario,$password,$bdname);

    if($conn->connect_error){
        echo 'Error al conectarse ala base de datos '.$conn->connect_error;
    }

?>