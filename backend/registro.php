<?php
$host = 'localhost';
$db   = 'clientes';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];

    $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (email, senha, cpf) VALUES ('$email', '$senha_criptografada', '$cpf')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
