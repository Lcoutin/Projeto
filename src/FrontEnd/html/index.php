<?php include './acessibilidade.html'?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicConect</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../global.css">
</head>
<body>
    <header>
        <div class="content">
            <a class="logo" href=""><img src="../img/img-logo.png"alt=""></a>
            <nav class="nav-links">
                <ul>
                    <li><a href="#sobre-nos">Sobre Nós</a></li>
                    <li><a href="#contratantes">Contratantes</a></li>
                    <li><a href="#musicos">Músicos</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="../html/login.php">Entrar</a></li>
                    <li><a href="../html/cadastro-inicial.php" class="btn-cadastro">Inscreva-se</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Conectando Talentos e Oportunidades!</h1>
            <p>Seja você músico ou contratante, o MusicConect é sua plataforma de confiança.</p>
            <a href="../html/cadastro-inicial.php" class="btn-primary">Seja Parte da Música</a>
        </div>
    </section>

    <section id="contratantes" class="section">
        <h2>Para Contratantes</h2>
        <p>
            Encontre o músico ideal para o seu evento com nosso sistema de busca inteligente. Escute demonstrações e negocie diretamente com os artistas.
        </p>
    </section>

    <section id="musicos" class="section">
        <h2>Músicos</h2>
        <p>
            Crie seu perfil, mostre seu talento e expanda sua rede de oportunidades. O MusicConect ajuda você a transformar paixão em profissão.
        </p>
    </section>

    <section id="sobre-nos" class="section">
        <h2>Sobre Nós</h2>
        <p>
            O MusicConect é a plataforma perfeita para conectar músicos e contratantes. <br> Nossa missão é tornar simples e eficiente o processo de encontrar talentos musicais para eventos ou oportunidades que promovam o sucesso dos artistas.
        </p>
    </section>

    <section id="contato" class="section">
        <h2>Contato</h2>
        <p>Tem dúvidas? Fale conosco pelo formulário abaixo.</p>
        <form>
            <input type="text" placeholder="Seu Nome" required>
            <input type="email" placeholder="Seu E-mail" required>
            <textarea placeholder="Sua Mensagem" required></textarea>
            <button type="submit" class="btn-primary">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 MusicConect. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
