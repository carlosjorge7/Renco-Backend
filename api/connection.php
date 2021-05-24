<?php
    $conn = new mysqli("127.0.0.1", "root", "", "rentingcoches", 3306);
    if ($conn->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
    }
    else{
        //echo $conn->host_info . ": Conectado a rentingCoches";
    }
?>

