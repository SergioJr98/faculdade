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
        mysqli_report(MYSQLI_REPORT_STRICT|MYSQLI_REPORT_ERROR);
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $cpf = $_POST['cpf'];


            //----------código antigo------------
            // $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);

            // $sql = "INSERT INTO usuarios (email, senha, cpf) VALUES ('$email', '$senha_criptografada', '$cpf')";
            //----------fim código antigo------------
            try {
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
            }  catch (mysqli_sql_exception $e) {
                echo "<div class='topo-php'>
                        <h2 id='topo-msg'>Erro no registro \u{274C}<h2>
                        <div class='btn-usuario-php'>
                            <a href='../usuario.html'><button type='button' id='ir-para-btn'>Voltar</button></a>
                        </div>
                    </div>";

                if ($e->getCode() == 1062) {
                    // Tratamento específico para duplicidade de entrada para chave única
                    echo "<p>E-mail ou CPF já cadastrado!</p>";
                    echo "<p id='mensagem-exception'>Erro: " . $e->getMessage(). "</p>";

                } else {
                    // Tratamento para outros erros
                    echo "<p id='mensagem-exception'>Erro MySQL: " . $e->getMessage() . " (Código: " . $e->getCode() . ")<p>";
                }
            }

        }

        desconectarBanco();
    ?>
</body>

</html>