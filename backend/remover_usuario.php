<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remoção usuário</title>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
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
                        echo "<div class='topo-php'>
                                <h2 id='topo-msg'>Conta removida com sucesso! \u{2705}<h2>
                                <div class='btn-usuario-php'>
                                    <a href='../usuario.html'><button type='button' id='ir-para-btn'>Voltar</button></a>
                                </div>
                            </div>";

                    } else {
                        echo "Erro: " . $sql . "<br>" . $conn->error;
                    }

                } else {
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
            
        }
        desconectarBanco();
    ?>
</body>

</html>