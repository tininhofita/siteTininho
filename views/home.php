<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tininho Fita</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lcu9qkqAAAAAG0EmIFhNQTLsMQSAQhUDv8P4mDF"></script>
    <link rel="icon" type="image/x-icon" href="<?= BASE_URL ?>assets/imgs/logo-tininho.png">
    <!-- Meta Tags de SEO -->
    <meta name="description" content="Tininho Fita - Desenvolvedor Web e Front-End Developer. Transformo ideias em experiências digitais memoráveis, com foco em responsividade, acessibilidade e design criativo. Explore meus projetos e habilidades!">
    <meta name="keywords" content="Tininho Fita, Desenvolvedor Web, Front-End Developer, Back-End Developer, Business Intelligence, Power BI, Desenvolvimento Web, Projetos Digitais, Criação de Sites, Portfólio, Programação, Experiência do Usuário, Freelance Developer">
    <meta name="author" content="Tininho Fita">
    <!-- Robots -->
    <meta name="robots" content="index, follow">
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Tininho Fita - Desenvolvedor Web">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tininhofita.com"> <!-- Substitua pelo URL real -->
    <meta property="og:image" content="https://tininhofita.com/assets/imgs/foto-principal-semfundo.png">
    <meta property="og:description" content="Conheça o portfólio de Tininho Fita, desenvolvedor web e front-end developer. Transformo ideias em experiências digitais memoráveis com foco em design criativo e responsividade.">
    <meta property="og:site_name" content="Tininho Fita - Portfólio">
    <meta property="og:locale" content="pt_BR">
</head>

<body>
    <header class="header">
        <a href="#home" class="titulo-header">Tininho Fita</a>
        <nav class="navegacao">
            <a href="#home" class="ativo">Home</a>
            <a href="#sobre-mim">Sobre Mim</a>
            <a href="#servicos">Serviços</a>
            <a href="#portfolio">Portfólio</a>
            <a href="#contato">Contato</a>
        </nav>

        <div class="bx bx-moon" id="modo-escuro-icon"></div>
        <div class="bx bx-menu" id="menu-hamburguer"></div>

    </header>
    <main>
        <section class="secao home" id="home">
            <div class="caixa-home">
                <h3>Salve! Eu Sou o</h3>
                <h1>Tininho Fita</h1>
                <p>Dando vida às ideias com um clique! Atuo como Front End Developer, transformando conceitos em páginas vibrantes, cheias de funcionalidade e estilo. Meu código é mais do que linhas: é arte, é técnica, é convite ao novo. Vamos inovar juntos e criar experiências digitais memoráveis!</p>

                <div class="redes-sociais">
                    <a href="https://www.facebook.com/tininhofita/"><img src="<?= BASE_URL ?>assets/imgs/facebook.svg" alt="Logo Facebook"></a>
                    <a href="https://x.com/TininhoFita"><img src="<?= BASE_URL ?>assets/imgs/twitter-x.svg" alt="Logo Twitter X"></a>
                    <a href="https://www.instagram.com/tininhofita/"><img src="<?= BASE_URL ?>assets/imgs/instagram.svg" alt="Logo Instagram"></a>
                    <a href="https://www.linkedin.com/in/franciel-castilho/"><img src="<?= BASE_URL ?>assets/imgs/linkedin.svg" alt="Logo Linkedin"></a>
                </div>
            </div>
            <div class="container-profissao">
                <div class="caixa-profissao">
                    <div class="profissao dev" style="--i:0;">
                        <img src="<?= BASE_URL ?>assets/imgs/front.svg" alt="Icone DEV">
                        <h3>DEV Full Stack</h3>
                    </div>
                    <div class="profissao pbi" style="--i:1;">
                        <img src="<?= BASE_URL ?>assets/imgs/bar-chart-fill.svg" alt="Icone Business Intelligence">
                        <h3>Business Intelligence</h3>
                    </div>
                    <div class="profissao front" style="--i:2;">
                        <img src="<?= BASE_URL ?>assets/imgs/code-slash.svg" alt="Icone Front-End">
                        <h3>Front-End</h3>
                    </div>
                    <div class="profissao back" style="--i:3;">
                        <img src="<?= BASE_URL ?>assets/imgs/gear-fill.svg" alt="Icone Back-End">
                        <h3>Back-End</h3>
                    </div>
                    <div class="circulo"></div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="home-img">
                <img src="<?= BASE_URL ?>assets/imgs/foto-principal-semfundo.png" alt="Tininho Fita com blusa vermelha">
            </div>
        </section>

        <section class="secao sobre" id="sobre-mim">
            <div class="caixa-foto">
                <img src="<?= BASE_URL ?>assets/imgs/foto-principal-semfundo.png" alt="Tininho Fita com blusa vermelha">
            </div>
            <div class="conteudo-sobre">
                <h2 class="subtitulos">Sobre <span>Mim</span></h2>
                <h3>Olá, bem-vindo ao meu site! Sou Tininho, um apaixonado desenvolvedor web com foco em front-end que adora aprender novas tecnologias e resolver problemas com código.</h3>
                <p>Como Analista de Dados e E-commerce no Laboratório Fantasma, combino meu amor pelo design com minhas habilidades técnicas para criar interfaces incríveis. Com uma experiência freelance, domino HTML, CSS, PHP e JavaScript, criando sites responsivos que oferecem uma ótima experiência em todos os dispositivos.</p>
                <p>Minha jornada é repleta de projetos transformadores, onde cada pixel é cuidadosamente pensado para contar histórias envolventes e criar conexões. Além do desenvolvimento, me dedico a garantir que cada site seja não só visualmente atraente, mas também totalmente acessível, reforçando a presença digital das marcas para as quais trabalho.</p>
                <p>Estou sempre atualizado com as últimas tendências do mercado, o que me permite manter minhas criações relevantes e inovadoras. Cada linha de código é uma nova oportunidade para criar algo extraordinário. Obrigado por visitar meu site e conhecer um pouco mais sobre mim. Espero que você tenha gostado de navegar pelos meus projetos.</p>
                <a href="#contato" class="btn-vermelho">Contate</a>
            </div>
        </section>

        <section class="secao servicos" id="servicos">

            <h2 class="subtitulos">Minhas <span>Habilidades</span></h2>

            <div class="container-servicos">
                <div class="caixa-servicos">
                    <i class='bx bx-code-alt'></i>
                    <h3>Front-End Development</h3>
                    <p>Especialista em Front-End, utilizo HTML, CSS e JavaScript para criar interfaces que não só cativam visualmente, mas também oferecem funcionalidade completa. Cada projeto é meticulosamente desenvolvido para assegurar uma experiência de usuário impecável.</p>
                    <a href="#contato" class="btn-vermelho">Contate</a>
                </div>

                <div class="caixa-servicos">
                    <i class='bx bxs-cog'></i>
                    <h3>Back-End Development</h3>
                    <p>No Back-End, desenvolvo soluções robustas que formam a espinha dorsal dos aplicativos web, integrando lógicas complexas e APIs poderosas. Com uma sólida experiência em PHP e sistemas de banco de dados, asseguro uma integração perfeita e eficiente entre back-end e front-end.</p>
                    <a href="#contato" class="btn-vermelho">Contate</a>
                </div>

                <div class="caixa-servicos">
                    <i class='bx bxs-pie-chart-alt-2'></i>
                    <h3>Business Intelligence</h3>
                    <p>Em Business Intelligence, converto dados brutos em insights estratégicos, empregando ferramentas avançadas como Power BI. Minha análise detalhada permite identificar tendências e orientar decisões corporativas, impulsionando o crescimento sustentável e a eficiência operacional.</p>
                    <a href="#contato" class="btn-vermelho">Contate</a>
                </div>
            </div>

        </section>

        <section class="secao portfolio" id="portfolio">

            <h2 class="subtitulos">Últimos <span>Projetos</span></h2>

            <div class="container-projetos">

                <div class="caixa-projetos">
                    <img src="<?= BASE_URL ?>assets/imgs/caio-site.jpg" alt="">
                    <div class="projetos-info">
                        <h4>Site - Caio Martins</h4>
                        <p>Descubra o encanto e a magia de Caio Martins, um talentoso mágico que traz espetáculos únicos para seu público. Este site foi desenvolvido para capturar a essência de suas performances, com uma navegação intuitiva e design que reflete a arte da magia.</p>
                        <a href=""><i class='bx bx-link-external'></i></a>
                    </div>
                </div>

                <div class="caixa-projetos">
                    <img src="<?= BASE_URL ?>assets/imgs/caio-admin.jpg" alt="">
                    <div class="projetos-info">
                        <h4>ADM - Site Caio Martins</h4>
                        <p>Explore a seção administrativa do site de Caio Martins, projetada para gerenciar eficientemente agenda, banners e contatos. Esta plataforma facilita atualizações rápidas e eficazes, assegurando que o conteúdo do site esteja sempre atualizado e dinâmico.</p>
                    </div>
                </div>

                <div class="caixa-projetos">
                    <img src="<?= BASE_URL ?>assets/imgs/pbi-lab.jpg" alt="">
                    <div class="projetos-info">
                        <h4>Painel - LAB</h4>
                        <p>Descubra o Painel LAB, uma solução abrangente desenvolvida no Power BI para gerenciar e visualizar dados cruciais de negócios. Este painel permite análises detalhadas através de módulos como faturamento, e-commerce, logística e muito mais, proporcionando insights valiosos que otimizam as operações e estratégias empresariais.</p>
                    </div>
                </div>
            </div>



            <Div class="container-clientes">
                <h2 class="subtitulos">Meus <span>Clientes</span></h2>

                <div class="caixa-clientes">
                    <div class="conteudo-clientes">
                        <div class="card-clientes">
                            <div class="comentarios">
                                <img src="<?= BASE_URL ?>assets/imgs/caio.jpg" alt="">
                                <h3>Caio Martins</h3>
                                <p>"Desde sempre, admirei a dedicação e o comprometimento do Tininho em seus trabalhos, mas nunca havia tido a oportunidade de trabalhar diretamente com ele até precisar de um site novo. Desde o início, ele captou exatamente o que eu desejava: um site com um design clean, funcional e intuitivo, tanto para quem administra quanto para os visitantes. Além de superar todas as minhas expectativas, ele entregou o projeto com agilidade e ainda adicionou uma mágica interativa que tornou o site verdadeiramente único. Só tenho a agradecer por todo o profissionalismo e talento. Sem dúvida, essa foi a primeira de muitas parcerias!"</p>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </Div>

        </section>

        <section class="secao contato" id="contato">

            <h2 class="subtitulos">Me <span>Contate</span></h2>

            <form id="contatoSite" action="/contato/enviar" method="post" class="form-contato">
                <div class="caixa-input">
                    <input type="text" id="nome" name="nome" placeholder="Nome">
                    <input type="text" id="telefone" name="telefone" placeholder="Somente Números">
                    <input type="email" id="email" name="email" placeholder="E-mail">
                    <input type="text" id="assunto" name="assunto" placeholder="Assunto">
                </div>
                <textarea id="descricao" name="descricao" rows="3" maxlength="500" placeholder="Ex. Gostaria de Solicitar um orçamento para criação de um site no estilo do site https://caiomartinsomagico.com/"></textarea>
                <!-- Campo oculto para armazenar o token do reCAPTCHA -->
                <input type="hidden" id="recaptchaToken" name="recaptchaToken">
                <button type="submit" class="btn-vermelho">Enviar</button>
            </form>

        </section>
    </main>

    <footer class="footer">
        <div class="text-footer">
            <p>Copyright © 2025 | Tininho Fita - Todos os direitos reservados.</p>
        </div>
        <div class="icone-topo">
            <a href="#home"><i class='bx bxs-up-arrow-circle'></i></a>
        </div>
        <div class="caixa-whats">
            <a href="https://wa.me/5511951221049?text=Opa,%20tudo%20bem?%20Gostaria%20de%20solicitar%20um%20orçamento%20para%20criar%20um%20site."
                target="_blank"
                rel="noopener noreferrer">
                <i class='bx bxl-whatsapp'></i>
            </a>
        </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- meu js -->
    <script src="assets/js/home.js"></script>
    <script src="assets/js/contato.js"></script>
</body>

</html>