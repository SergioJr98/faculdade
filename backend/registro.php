<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro usuário</title>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
</head>

<body>

    <?php

        require_once 'db_conexao.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $cpf = $_POST['cpf'];


            //----------código antigo------------
            // $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);

            // $sql = "INSERT INTO usuarios (email, senha, cpf) VALUES ('$email', '$senha_criptografada', '$cpf')";
            //----------fim código antigo------------

            $sql = "INSERT INTO usuarios (email, senha, cpf) VALUES ('$email', '$senha', '$cpf')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='topo-php'>
                        <h2 id='topo-msg'>Registro realizado com sucesso! \u{2705}<h2>
                        <div class='btn-usuario-php'>
                            <a href='../usuario.html'><button type='button' id='ir-para-btn'>Voltar</button></a>
                        </div>
                    </div>";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        }

        desconectarBanco();
    ?>
</body>

</html>