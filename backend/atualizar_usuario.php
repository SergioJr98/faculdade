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
    $email = $_POST['email-antigo'];
    $senha = $_POST['senha-antiga'];
    $nova_senha = $_POST['nova-senha'];
    $novo_email = $_POST['novo-email'];

    
    $sql = "SELECT senha FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($senha == $row['senha']) {

            $sql = "UPDATE usuarios SET senha = '$nova_senha', email = '$novo_email' WHERE email = '$email'";
            
            if ($conn->query($sql) === TRUE) {
                echo "<h2>Dados atualizados com sucesso!</h2>";
                echo "<div class='btn-usuario'>
                <a href='../usuario.html'><button type='button' id='ir-para-btn'>Voltar</button></a></div>";               
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }

        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    // if ($result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    //     if (password_verify($senha, $row['senha'])) {

    //         $senha_criptografada = password_hash($nova_senha, PASSWORD_BCRYPT);

    //         $sql = "UPDATE usuarios SET senha = '$senha_criptografada', email = '$novo_email' WHERE cpf = '$cpf'";
            
    //         if ($conn->query($sql) === TRUE) {
    //             echo "Dados atualizados com sucesso!";
    //         } else {
    //             echo "Erro: " . $sql . "<br>" . $conn->error;
    //         }

    //     } else {
    //         echo "Senha incorreta.";
    //     }
    // } else {
    //     echo "Usuário não encontrado.";
    // }

    
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