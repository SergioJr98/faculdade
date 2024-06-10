<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "gamebook_db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function desconectarBanco() {
    global $conn;
    $conn->close();
}

?>

<!-- Observação: é possível importar o banco de dados usado neste trabalho no phpAdmin a partir do 
 arquivo "gamebook_db.sql", que está na pasta "backend"-->