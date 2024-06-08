<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successfull</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
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

            //-----código antigo---------
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
            //-----fim código antigo--------


            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($senha == $row['senha']) {
                    echo "<div class='topo-php'>
                            <h2 id='topo-msg'>Entrou no sistema! \u{2705}<h2>
                            <div class='btn-usuario-php'>
                                <a href='../usuario.html'><button type='button' id='ir-para-btn'>Voltar</button></a>
                            </div>
                        </div>";

                    echo "<h2 id='bem-vindo'>Bem vindo, $email!<h2>";

                } else {
                    // echo "Senha incorreta \u{274C}";
                    echo "<div class='topo-php'>
                            <h2 id='topo-msg'>Senha incorreta \u{274C}<h2>
                            <div class='btn-usuario-php'>
                                <a href='../usuario.html'><button type='button' id='ir-para-btn'>Voltar</button></a>
                            </div>
                        </div>";
                }
            } else {
                echo "<div class='topo-php'>
                            <h2 id='topo-msg'>Usuário não encontrado \u{274C}<h2>
                            <div class='btn-usuario-php'>
                                <a href='../usuario.html'><button type='button' id='ir-para-btn'>Voltar</button></a>
                            </div>
                        </div>";
            }  

            $stmt->close();
        }

        desconectarBanco();
    ?>
</body>

</html>