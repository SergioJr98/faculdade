-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/06/2024 às 23:39
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gamebook_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `descricao` text NOT NULL,
  `youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogos`
--

INSERT INTO `jogos` (`id`, `titulo`, `preco`, `descricao`, `youtube`) VALUES
(1, 'Minecraft', 40, 'Explore mundos gerados aleatoriamente e construa das casas mais simples aos maiores castelos.\r\n\r\nJogue no modo criativo com recursos ilimitados, ou minere as profundezas do mundo no modo sobrevivência, criando armas e armaduras para se defender dos monstros.', 'https://www.youtube.com/embed/MmB9b5njVbA?si=1OtZdPsjRJZvxUoW'),
(2, 'God Of War II', 99, 'Ambientado no domínio da brutal mitologia grega, God of War II Remasterizado é o jogo para um jogador aclamado pela crítica que permite ao jogador assumir o papel do destemido ex-guerreiro espartano Kratos, em sua ascensão das profundezas obscuras de Hades para escalar as altitudes do Monte Olimpo e buscar sua vingança sangrenta contra aqueles que o traíram. Munido de duas espadas com correntes e um conjunto de novas armas e mágicas, Kratos deverá enfrentar as criaturas mais mortais da mitologia e resolver enigmas complexos em sua busca implacável para destruir o Olimpo.', 'https://www.youtube.com/embed/x9YH8oGdcm8?si=uxIMsQ7GPR6j6zYo'),
(3, 'Forza Horizon 5', 70, 'Sua maior aventura Horizon te espera! Lidere impressionantes expedições pelo mundo aberto vibrante e em constante evolução nas terras mexicanas. Participe de corridas divertidas e sem limites enquanto pilota centenas dos melhores carros do mundo.', 'https://www.youtube.com/embed/FYH9n37B7Yw?si=BxFmfljqhHqMueBx'),
(4, 'Halo 5: Guardians - Xbox One', 100, 'Halo 5: Guardians oferece uma experiência multijogador épica com vários modos, ferramentas completas para criação de níveis e um novo capítulo da saga do Master Chief. Agora, com Xbox One X, os jogadores podem aproveitar visuais aprimorados e mais detalhados, com resolução de até 4K e fidelidade gráfica melhorada, deixando o jogo mais bonito do que nunca, mantendo consistência com 60 FPS para jogar da forma mais fluida possível.<br><br>\r\nCAMPANHA ÉPICA A saga do Master Chief continua em uma experiência individual ou cooperativa para 4 jogadores em três mundos. Uma força misteriosa e implacável ameaça a galáxia. Os Spartans da Esquadra Osiris e a Equipe Azul devem embarcar em uma jornada que vai mudar o rumo da história e o futuro da humanidade.', 'https://www.youtube.com/embed/PyMlV5_HRWk?si=GtVVvXlFYMk8DFvT'),
(5, 'EA SPORTS™ FIFA 23', 120, 'O EA SPORTS™ FIFA 23 traz o World’s Game para dentro de campo com a Tecnologia HyperMotion2 que proporciona ainda mais realismo no jogo, com o FIFA World Cup™ masculino e feminino, que chegam ao jogo como atualizações pós-lançamento, a inclusão de equipas de clubes femininos, funcionalidades de cross-play** e muito mais. Experimenta uma autenticidade sem paralelo com mais de 19 000 jogadores e jogadoras, mais de 700 equipas, 100 estádios e mais de 30 ligas no FIFA 23.', 'https://www.youtube.com/embed/o3V-GvvzjE4?si=nisEQg28LilthpAy'),
(6, 'Tom Clancy’s Ghost Recon® Wildlands', 89, 'Experimente o Ghost Recon® Wildlands grátis!\r\n\r\nCrie uma equipe com até 3 amigos em Tom Clancy’s Ghost Recon® Wildlands e desfrute da derradeira experiência do shooter militar num enorme, perigoso, envolvente e reativo mundo aberto.\r\n\r\nDESMANTELE O CARTEL\r\nNum futuro próximo, a Bolívia caiu nas mãos da Santa Blanca, um cartel de droga impiedoso que espalhou a injustiça e a violência. O seu objetivo: criar o maior estado de narcotráfico de sempre.\r\n\r\nTORNE-SE UM GHOST\r\nCria e personaliza por completo o teu Ghost e as suas armas e equipamento. Desfrute de uma liberdade de jogo total. Lidera a tua equipa e desmantela o cartel a solo ou com três amigos.\r\n\r\nEXPLORE A BOLÍVIA\r\nViaje através do maior mundo aberto criado pela Ubisoft para um jogo de ação e aventura. Descubra as paisagens espantosas e diversas do Wildlands por terra, mar e ar com mais de 60 veículos diferentes.\r\n\r\n', 'https://www.youtube.com/embed/Jmzo4KvRmsM?si=ZFA2o0gQMerQS9H_');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(100) NOT NULL,
  `titulo` text NOT NULL,
  `autor` text NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `preco`, `descricao`) VALUES
(1, 'O Caçador de Pipas', 'Khaled Hosseini', 26, '\"O Caçador de Pipas\" é um romance com tintas autobiográficas que conta a história da amizade de Amir e Hassan, dois meninos quase da mesma idade, que vivem vidas muito diferentes no Afeganistão da década de 1970.\r\nAmir é rico e bem-nascido, um pouco covarde, e sempre busca a aprovação de seu próprio pai. Hassan, que não sabe ler nem escrever, é conhecido pela coragem e bondade. Os dois, no entanto, são loucos por histórias antigas de grandes guerreiros, filmes de caubói americanos e pipas. E é justamente durante um campeonato de pipas, no inverno de 1975, que Hassan dá a Amir a chance de ser um grande homem, mas ele não enxerga sua redenção. Após este episódio, Amir vai para os Estados Unidos, fugindo da invasão soviética ao Afeganistão, mas 20 anos depois Hassan e a pipa azul o fazem voltar à sua terra natal para acertar contas com o passado.\r\nBest-seller mundial, este livro vendeu mais de 5 milhões no mundo todo e ganhou uma versão cinematográfica.'),
(2, 'A Menina que Roubava Livros', 'Markus Zusak', 52, 'A trajetória de Liesel Meminger é contada por uma narradora mórbida, surpreendentemente simpática. Ao perceber que a pequena ladra de livros lhe escapa, a Morte afeiçoa-se à menina e rastreia suas pegadas de 1939 a 1943.\r\n\r\nTraços de uma sobrevivente: a mãe comunista, perseguida pelo nazismo, envia Liesel e o irmão para o subúrbio pobre de uma cidade alemã, onde um casal se dispõe a adotá-los por dinheiro. O garoto morre no trajeto e é enterrado por um coveiro que deixa cair um livro na neve. É o primeiro de uma série que a menina vai surrupiar ao longo dos anos. O único vínculo com a família é esta obra, que ela ainda não sabe ler.\r\n\r\nAssombrada por pesadelos, ela compensa o medo e a solidão das noites com a conivência do pai adotivo, um pintor de parede bonachão que lhe dá lições de leitura. Alfabetizada sob vistas grossas da madrasta, Liesel canaliza urgências para a literatura. Em tempos de livros incendiados, ela os furta, ou os lê na biblioteca do prefeito da cidade.\r\n\r\nA vida ao redor é a pseudo-realidade criada em torno do culto a Hitler na Segunda Guerra. Ela assiste à eufórica celebração do aniversário do Führer pela vizinhança. Teme a dona da loja da esquina, colaboradora do Terceiro Reich. Faz amizade com um garoto obrigado a integrar a Juventude Hitlerista. E ajuda o pai a esconder no porão um judeu que escreve livros artesanais para contar a sua parte naquela História. A Morte, perplexa diante da violência humana, dá um tom leve e divertido à narrativa deste duro confronto entre a infância perdida e a crueldade do mundo adulto, um sucesso absoluto - e raro - de crítica e público.\r\n\r\nBest-seller da Veja\r\n\r\n'),
(3, 'Orgulho e Preconceito', 'Jane Austen', 30, '\"Orgulho e Preconceito\" é uma obra clássica da renomada autora Jane Austen, que cativa leitores há mais de dois séculos com sua história envolvente e personagens inesquecíveis. Ambientado na Inglaterra do século XIX, este romance de época nos transporta para um mundo de etiqueta, amor e desafios sociais.A história gira em torno da encantadora e inteligente Elizabeth Bennet, uma jovem de espírito livre e opiniões fortes, e do misterioso e aristocrático Sr. Darcy. Com diálogos brilhantes e uma narrativa envolvente, Jane Austen nos conduz por um jogo de encontros e desencontros, preconceitos e descobertas, enquanto os personagens enfrentam as complexidades das relações sociais e os dilemas do coração.Ao longo das páginas, somos apresentados a uma gama de personagens memoráveis, desde as irmãs de Elizabeth até os pretendentes em busca de casamento. Cada personagem é cuidadosamente construído, retratando diferentes facetas da sociedade da época e explorando temas como amor, casamento, classe social e moralidade.\"Orgulho e Preconceito\" é uma obra que transcende gerações, continuando a cativar leitores de todas as idades com sua narrativa inteligente e atemporal. É um mergulho profundo nas nuances da sociedade e nas emoções humanas, com uma escrita elegante e perspicaz que encanta e inspira. Este livro é um tesouro literário que nos convida a refletir sobre os preconceitos arraigados em nós e a valorizar a busca pela verdadeira conexão humana, mostrando que o amor verdadeiro pode superar as barreiras impostas pela sociedade e nos ensinando importantes lições sobre humildade, respeito e autoconhecimento. Esta edição especial traz capa dura com acabamento almofadado, conferindo um toque de elegância e durabilidade à obra. Além disso, inclui um marcador de páginas de fitilho, proporcionando aos leitores uma experiência ainda mais prazerosa. Uma obra indispensável na biblioteca de qualquer leitor.'),
(4, 'O Meu Pé de Laranja Lima', 'José Mauro de Vasconcelos', 40, 'Um clássico da literatura brasileira, com adaptações para a televisão, o cinema e o teatro, O Meu Pé de Laranja Lima é desses livros que marcam época. Lançado em 1968, trata-se de uma história fortemente autobiográfica, que demonstra a mão de um escritor experiente, ciente do efeito que pode provocar nos leitores com suas cenas e a composição de seus personagens. O protagonista Zezé tem 6 anos e mora num bairro modesto, na zona norte do Rio de Janeiro. O pai está desempregado, e a família passa por dificuldades. O menino vive aprontando, sem jamais se conformar com as limitações que o mundo lhe impõe – viaja com sua imaginação, brinca, explora, descobre, responde aos adultos, mete-se em confusões, causa pequenos desastres. As surras que lhe aplicam seu pai e sua irmã mais velha são seu suplício, a ponto de fazê-lo querer desistir da vida. No entanto, o apego ao mundo que criou felizmente sempre fala mais alto. Só não há remédio para a dor, para a perda. E Zezé muito cedo descobrirá isso. A alegria e a tristeza não poderiam estar mais bem combinadas do que nestas páginas. E isso, se não explica, justifica a imensa popularidade alcançada pelo livro.'),
(5, 'O Guia do Mochileiro das Galáxias', 'Douglas Adams', 30, 'Considerado um dos maiores clássicos da literatura de ficção científica, O Guia do Mochileiro das Galáxias vem encantando gerações de leitores ao redor do mundo com seu humor afiado.\r\n\r\nEste é o primeiro título da famosa série escrita por Douglas Adams, que conta as aventuras espaciais do inglês Arthur Dent e de seu amigo Ford Prefect.\r\n\r\nA dupla escapa da destruição da Terra pegando carona numa nave alienígena, graças aos conhecimentos de Prefect, um E.T. que vivia disfarçado de ator desempregado enquanto fazia pesquisa de campo para a nova edição do Guia do Mochileiro das Galáxias, o melhor guia de viagens interplanetário.\r\n\r\nMestre da sátira, Douglas Adams cria personagens inesquecíveis e situações mirabolantes para debochar da burocracia, dos políticos, da \"alta cultura\" e de diversas instituições atuais. Seu livro, que trata em última instância da busca do sentido da vida, não só diverte como também faz pensar.'),
(6, 'Dom Casmurro', 'Machado de Assis', 45, 'Em Dom Casmurro, o narrador Bento Santiago retoma a infância que passou na Rua de Matacavalos e conta a história do amor e das desventuras que viveu com Capitu, uma das personagens mais enigmáticas e intrigantes da literatura brasileira. Nas páginas deste romance, encontra-se a versão de um homem perturbado pelo ciúme, que revela aos poucos sua psicologia complexa e enreda o leitor em sua narrativa ambígua acerca do acontecimento ou não do adultério da mulher com olhos de ressaca, uma das maiores polêmicas da literatura brasileira.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `email` text NOT NULL,
  `cpf` text NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `cpf`, `senha`) VALUES
(1, 'bianca@email.com', '123456', 'abc'),
(3, 'sdfsf', 'sfdsdfsf', 'sdfsdfs');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `CPF_unico` (`cpf`) USING HASH,
  ADD UNIQUE KEY `email_unico` (`email`) USING HASH;

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
