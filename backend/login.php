<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successfull</title>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <style>

        .topo-php {
            background-color: #d2acec;
            padding: 5px 10px 5px 40px;
            float: left;
            width: 100%
        }

        h2 {
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            color: #000;
            font-family: "Ubuntu", sans-serif;
            font-size: 25px;
            font-style: normal;
            font-weight: 200;
            line-height: normal;
            text-align: center;

        }

        #topo-entrou{
            justify-content: left;
            display: flex;
            width: 50%;
            float: left;
        }
        .btn-usuario-php {
            justify-content: right;
            display: flex;
            width: 50%;
            float: right;
        }

        #ir-para-btn {
            width: 200px;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            font-size: 20px;
            font-weight: 300;
            background: #25d366;
            padding: 10px;
            float: left;
        }

        #bem-vindo {
            justify-content: center;
            padding: 20px 20px 20px 20px;
            width: 100%;
            float: left;
        }

    </style>
</head>
<body>

<?php

require_once 'db_conexao.php';

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
            // echo "<h2>Entrou no sistema!<h2>";
            // echo "<div class='btn-usuario-php'>
            // <a href='../usuario.html'><button type='button' id='ir-para-btn'>Voltar</button></a></div>";

            echo "<div class='topo-php'>
                    <h2 id='topo-entrou'>Entrou no sistema!<h2>
                    <div class='btn-usuario-php'>
                        <a href='../usuario.html'><button type='button' id='ir-para-btn'>Voltar</button></a>
                    </div>
                </div>";

            echo "<h2 id='bem-vindo'>Bem vindo, $email!<h2>";

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

desconectarBanco();

?>

</body>
</html>



