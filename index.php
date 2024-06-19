<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Sensibily</title>
    <link rel="stylesheet" href="site.css">
</head>

<body>
    <header>
        <h1>Sensibily Clinica</h1>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="#sobre">Contato</a>
        </div>
    </header>

    <section id="home">
        <h2>O quê é a Sensibily e qual sua proposta?</h2>
        <div class="inicio">
            <img src="https://static.wixstatic.com/media/d0e70b_80a44dde05ba4983be39c9d4fe08e8a7~mv2.png/v1/fill/w_1920,h_581,al_c,q_90,enc_auto/d0e70b_80a44dde05ba4983be39c9d4fe08e8a7~mv2.png" alt="clinica">
            <div class="service-info">
                <p>
                    A Sensibily é a primeira clínica de nutrição integrativa do Sul do Brasil, localizada no centro
                    da cidade de Sapucaia do Sul. <br>
                    ​A clínica conta com uma equipe especializada em diversas áreas da Nutrição, Medicina,
                    Fisioterapia, Psicologia, Fonoaudiologia, Massoterapia e Terapias Faciais, além de contar com um
                    Studio Personal Fit e um Mini SPA de relaxamento.<br>
                    ​Uma aconchegante Loja de suplementos, fitoterápicos e alimentos saudáveis, complementa o
                    negócio.<br>
                </p>
            </div>
        </div>
    </section>

    <section id="sobre">
        <h2>Como entrar em contato com a Sensibily?</h2>
        <div class="content">
            <img src="https://mais-bonita-site-media.s3.amazonaws.com/promocoes/capa700x260/promo-ZQZLh37T02UED9Vxjpg" alt="nutrição">
            <div class="sobrefinal">
                <p>
                    A Sensibily é uma empresa que está a 20 anos no mercado oferecendo serviços de alta qualidade em
                    nutrição, saúde e bem-estar.<br>
                    Entre em contato conosco para mais informações!
                </p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Entre em Contato</h2>
        <p>Estamos aqui para responder a todas as suas perguntas. Entre em contato conosco!</p>

        <!-- Formulário de Contato -->
        <form action="#" method="post" id="contact-form">
            <label for="name">Nome:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Mensagem:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>

            <button type="submit">Enviar Mensagem</button>
        </form>

        <!-- Informações de Contato -->
        <div id="contact-info">
            <p>Telefone: (51) 3400-9999</p>
            <p>Email: contato@sensibily.com</p>

            <!-- Links para Instagram e WhatsApp -->
            <p>
                Siga-nos:
                <a href="https://www.instagram.com/sensibily" target="_blank">Instagram</a> |
                <a href="https://wa.me/551112345678" target="_blank">WhatsApp</a>
            </p>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3461.6388657357957!2d-51.14190792513813!3d-29.81697592076427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95196f2a593c6151%3A0xee0be7c4a3eba933!2sCol%C3%A9gio%20ULBRA%20S%C3%A3o%20Lucas!5e0!3m2!1spt-BR!2sbr!4v1702940466733!5m2!1spt-BR!2sbr"
                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>

    <footer>
        <p>&copy; 2024 Sensibily Clinica. Todos os direitos reservados.</p>
    </footer>

</body>

</html>
