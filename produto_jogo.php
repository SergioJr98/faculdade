<?php

require_once ("backend/db_conexao.php");

// Recupera o ID do produto da URL
$id_produto = isset($_GET['id']) ? (int) $_GET['id'] : 1;

// Consulta ao banco de dados
$sql = "SELECT titulo, preco, descricao, youtube FROM jogos WHERE id = $id_produto";
$result = $conn->query($sql);

// Verifica se encontrou o produto
if ($result->num_rows > 0) {
    // Obtém os dados do produto
    $produto = $result->fetch_assoc();
} else {
    echo "Produto não encontrado.";
    exit;
}

// Fecha a conexão
$conn->close();
?>
<!-- ---------------------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Halo 5: Guardians</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--bootstrap-->
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
</head>

<body>
    <!------------------------ CABEÇALHO ---------------------->
    <header class="clearfix">
        <!-- BARRA DE NAVEGAÇAO -->
        <div class="primeira-header">
            <!--Logotipo-->
            <a href="index.php"><img src="imagens/logo-gamebook.jpg" alt="#"></a>
            <!--Logotipo-->
            <div class="dropdown">
                <button class="btn" type="button:focus-visible" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-list"></i>Categorias
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Livros</a></li>
                    <li><a class="dropdown-item" href="#">Literatura brasileira</a></li>
                    <li><a class="dropdown-item" href="#">Literatura estrangeira</a></li>
                    <li><a class="dropdown-item" href="#">Infanto-juvenil</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Jogos</a></li>
                </ul>
            </div>

            <!-- BARRA DE PESQUISA -->
            <div class="pesquisa">
                <label for="">
                    <i class="bi bi-search"></i>
                </label>
                <input type="text" id="barra-pesquisa" placeholder="Pesquisar">
            </div>
            <!-- BARRA DE PESQUISA -->
            <nav>
                <ul class="navlinks">
                    <li><i class="bi-file-person"></i><a href="usuario.html">Entrar</a></li>
                    <li><i class="bi-heart-fill"></i><a href="#">Favoritos</a></li>
                    <li><i class="bi-bag-check-fill"></i><a href="#">Minha Cesta</a></li>
                </ul>
            </nav>
        </div>
        <!-- BARRA DE NAVEGAÇAO -->
    </header>
    <!-------------------------- CABEÇALHO ------------------------>

    <!--------------- CONTEÚDO PRINCIPAL DO SITE ------------------>
    <main class="pagina-produto">
        <div class="container">
            <img id="produto" src="imagens/jogos/produto_jogo<?php echo $id_produto; ?>.jpg">
            <h1> <?php echo htmlspecialchars($produto['titulo']); ?></h1>
            <h2>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></h2>
            <h3>Em até 3x sem juros no cartão</h3>
            <button type="button" id="adicionar-carrinho">Adicionar á cesta</button>
        </div>

        <div class="background">
            <div id="frete2">
                <h5>Calcular o Frete</h5>
                <input id="frete" type="text" placeholder="00000-000">
                <button type="button" id="botao">OK</button>
            </div>
        </div>

        <div class="slider2" style="margin-left: 5%; margin-right: 5%;">
            <div
                style="width: 100%; align-content: center; height: 100%; padding-left: 30px; padding-right: 30px; justify-content: center; align-items: center; gap: 29px; display: inline-flex;">
                <iframe width="400px" height="258px" src="<?php echo $produto['youtube']; ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <img src="imagens/jogos/produto_jogo<?php echo $id_produto; ?>_1.jpg" alt="#">
                <img src="imagens/jogos/produto_jogo<?php echo $id_produto; ?>_2.jpg" alt="#">
                <img src="imagens/jogos/produto_jogo<?php echo $id_produto; ?>_3.jpg" alt="#">
            </div>
        </div>

        <div class="descricao">
            <h1>INFORMAÇÕES DO PRODUTO</h1>7
            <h2><?php echo htmlspecialchars($produto['descricao']); ?></h2>
        </div>

        <div class="detalhes">
            <h1>Informações técnicas:</h1>
            <h1>Desenvolvido por:</h1>
            <h1>Data de lançamento:</h1>
        </div>

    </main>
    <!--------------- CONTEÚDO PRINCIPAL DO SITE ------------------>

    <!-----------------------RODAPÉ------------------------>
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h3>Contato</h3>
                <a href="#" class="footer-link">Fale Conosco</a>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>

            <ul class="footer-list">
                <li>
                    <h3>Institucional</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Sobre a Gamebook</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Trabalhe Conosco</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Formas de Pagamento</h3>
                </li>
                <img id="img-formas-pagamento" src="imagens/pagamentos.png">
            </ul>

            <div id="footer_subscribe">
                <h3>Receba novidades</h3>

                <p>
                    Inscreva-se na nossa lista de e-mail e receba promoções e novidades:
                </p>

                <div id="input_group">
                    <input type="email" id="email" placeholder="Email">
                    <button>
                        <i class="bi-envelope"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            &#169
            GAMEBOOK LTDA - CNPJ XX.XXX.XXX/XXXX-XX - Rua xxxxxx, xxx - Centro - Niterói/RJ - CEP- xxxxxxx
        </div>
    </footer>
    <!-----------------------RODAPÉ------------------------>

    <!--JAVASCRIPT-->
    <!--BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!--BOOTSTRAP-->
    <script src="script.js"></script>
    <!--JAVASCRIPT-->
</body>

</html>