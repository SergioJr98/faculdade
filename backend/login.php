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

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($senha == $row['senha']) {
            echo "<h2>Entrou no sistema!<h2>";
            echo "<div class='btn-usuario'>
            <a href='../usuario.html'><button type='button' id='ir-para-btn'>Voltar</button></a></div>";
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    // if ($result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    //     if (password_verify($senha, $row['senha'])) {
    //         echo "Entrou no sistema!";
    //     } else {
    //         echo "Senha incorreta.";
    //     }
    // } else {
    //     echo "Usuário não encontrado.";
    // }
    $stmt->close();
}

$conn->close();
?>

<style>
    h2 {
        color: #000;
        font-family: "Ubuntu", sans-serif;
        font-size: 25px;
        font-style: normal;
        font-weight: 200;
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