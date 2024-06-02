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

    $sql = "UPDATE usuarios SET senha = '$senha', cpf = '$cpf' WHERE cpf = '$cpf'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Dados atualizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
