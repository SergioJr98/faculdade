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

    // $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);

    // $sql = "INSERT INTO usuarios (email, senha, cpf) VALUES ('$email', '$senha_criptografada', '$cpf')";

    $sql = "INSERT INTO usuarios (email, senha, cpf) VALUES ('$email', '$senha', '$cpf')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Registro realizado com sucesso!</h2>";
        echo "<div class='btn-usuario'>
        <a href='../usuario.html'><button type='button' id='ir-para-btn'>Voltar</button></a></div>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<style>
    h2 {
        color: #000;
        font-family: "Ubuntu", sans-serif;
        font-size: 25px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
        text-align: center;
        width: 100%;
        margin-top: 140px;
        float: left;
    }
    #ir-para-btn {
        width: 200px;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        font-size: 25px;
        font-weight: 600;
        background: #25d366;
        margin-top: 20px;
        padding: 10px;
        float: left;
    }

    .btn-usuario {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        float: left;
    }
</style>