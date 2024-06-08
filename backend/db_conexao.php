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