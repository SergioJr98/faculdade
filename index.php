<?php

require_once ("backend/db_conexao.php");

// Consulta ao banco de dados para obter todos os produtos
$sql = "SELECT id, titulo FROM jogos";
$result = $conn->query($sql);

$sql2 = "SELECT id, titulo FROM livros";
$result2 = $conn->query($sql2);

// Fecha a conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>GameBook</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--bootstrap-->
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
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
            <a href="index.php"><img src="imagens/logo-gamebook.jpg" alt="Gamebook"></a>
            <!--Logotipo-->
            <!--Dropdown categorias-->
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
            <!--Dropdown categorias-->
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
    <main>
        <!--BANNER DE PROMOÇÕES-->
        <div id="carouselExampleIndicators" class="carousel slide">
            <!-- Início indicadores para navegar nos slides do carousel (localizados na parte de baixo do carousel)-->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <!-- fim indicadores para navegar nos slides do carousel-->

            <!--Inicio slide carrousel-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagens/banner 1.gif" class="d-block w-100" alt="Promoção de jogos" />
                </div>
                <div class="carousel-item">
                    <img src="imagens/banner 2.jpg" class="d-block w-100" alt="Banner livros aproveite" />
                </div>
                <div class="carousel-item">
                    <img src="imagens/banner 3.jpg" class="d-block w-100"
                        alt="frete gratis em compras acima de R$200,00" />
                </div>
            </div>
            <!--Fim slide carrousel-->

            <!--Inicio setas "anterior" e "proximo" dos slides carrousel-->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <!--Fim setas "anterior" e "proximo" dos slides carrousel-->
        </div>
        <!--BANNER DE PROMOÇÕES-->

        <!-- CARD DE SLIDES LIVROS -->
        <h2 class="titulo-card">MAIS VENDIDOS EM LIVROS</h2>

        <?php if ($result2->num_rows > 0): ?>
        <div class="slider-livros clearfix" style="float: left;">
            <?php while ($produto = $result2->fetch_assoc()): ?>
            <div class="item-livro">
                <a href="produto_livro.php?id=<?php echo $produto['id']; ?>">
                    <img src="imagens/Livros/produto_livro_<?php echo $produto['id']; ?>.jpg"
                        alt="<?php echo $produto['titulo']; ?>">
                </a>
            </div>
            <?php endwhile; ?>
            <button id="next-livro"><i class="bi bi-caret-right"></i> </button>
            <button id="prev-livro"><i class="bi bi-caret-left"></i></button>
        </div>
        <?php else: ?>
        <p>Nenhum produto encontrado.</p>
        <?php endif; ?>
        <!-- CARD DE SLIDES LIVROS -->

        <!-- CARD DE SLIDES JOGOS -->
        <h2 class="titulo-card">MAIS VENDIDOS EM JOGOS</h2>
        <?php if ($result->num_rows > 0): ?>
        <div class="slider clearfix">
            <?php while ($produto = $result->fetch_assoc()): ?>
            <div class="item">
                <a href="produto_jogo.php?id=<?php echo $produto['id']; ?>">
                    <img src="imagens/jogos/produto_jogo<?php echo $produto['id']; ?>.jpg"
                        alt="<?php echo $produto['titulo']; ?>">
                </a>
            </div>
            <?php endwhile; ?>
            <button id="next"><i class="bi bi-caret-right"></i> </button>
            <button id="prev"><i class="bi bi-caret-left"></i></button>
        </div>
        <?php else: ?>
        <p>Nenhum produto encontrado.</p>
        <?php endif; ?>
        <!-- CARD DE SLIDES JOGOS-->
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