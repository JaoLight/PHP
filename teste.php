<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $banco = "coisas";

    $conn = new mysqli($host, $user, $password, $banco);

    if ($conn->connect_error) {
        die("erro na conexão: " . $conn->connect_error);
    }
    else{
        echo("Conexão Realizada");
    }

?>