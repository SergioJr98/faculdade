<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remoção usuário</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
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
            background: #76edb4;
            padding: 10px;
            float: left;
        }
        
        #ir-para-btn:hover {
            border: 2px outset #bfe2c1;
            background: #6bd1a0;
        }

    </style>
</head>
<body>

<?php
    
    require_once 'db_conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email-remover'];
        $senha = $_POST['senha-remover'];
        
        $sql = "SELECT senha FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($senha == $row['senha']) {

                $sql = "DELETE FROM usuarios WHERE email = '$email'";
                
                if ($conn->query($sql) === TRUE) {
                    echo "<h2>Conta deletada com sucesso!<h2>";
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
    desconectarBanco();
?>
</body>
</html>