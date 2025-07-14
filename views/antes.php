<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tininho Fita</title>
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- box icons css -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- meu CSS -->
    <link rel="stylesheet" href="assets/css/antigo.css">
</head>

<body>

    <!-- header design -->
    <header class="header">
        <a href="#" class="logo">Tininho Fita</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">Sobre mim</a>
            <a href="#services">Serviços</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contato</a>
        </nav>

        <div class="bx bx-moon" id="darkMode-icon"></div>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <main>

        <!-- home section design -->
        <section class="home" id="home">
            <div class="home-content">
                <h3>Salve! Eu sou o </h3>
                <h1>Tininho Fita</h1>
                <p>
                    Dando vida às ideias com um clique! Atuo como Front End Developer, transformando conceitos em
                    páginas
                    vibrantes, cheias de funcionalidade e estilo. Meu código é mais do que linhas: é arte, é técnica, é
                    convite ao novo. Vamos inovar juntos e criar experiências digitais memoráveis!
                </p>


                <div class="social-media">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>

                <a href="#" class="btn">Download CV</a>
            </div>

            <div class="profession-container">
                <div class="profession-box">
                    <div class="profession" style="--i:0;">
                        <i class='bx bx-layer'></i>
                        <h3>DEV Full Stack</h3>
                    </div>
                    <div class="profession" style="--i:1;">
                        <i class='bx bxs-bar-chart-alt-2'></i>
                        <h3>Business Intelligence</h3> <!-- Troquei para inglês para manter consistência -->
                    </div>
                    <div class="profession" style="--i:2;">
                        <i class='bx bx-code-alt'></i>
                        <h3>Front-End</h3> <!-- Adicionei "Developer" para ficar mais claro -->
                    </div>
                    <div class="profession" style="--i:3;">
                        <i class='bx bx-cog'></i>
                        <h3>Back-End</h3> <!-- Mudei o ícone para algo que represente mais claramente back-end -->
                    </div>

                    <div class="circle"></div>
                </div>

                <div class="overlay"></div>
            </div>

            <div class="home-img">
                <img src="assets/imgs/foto-principal-semfundo.png" alt="Imagem do Tininho com blusa vermelha">
            </div>
        </section>

        <!-- about section design -->
        <section class="about" id="about">
            <div class="about-img">
                <img src="assets/imgs/foto-principal-semfundo.png" alt="Imagem do Tininho com blusa vermelha">
            </div>

            <div class="about-content">
                <h2 class="heading">Sobre <span>Mim</span></h2>
                <h3>
                    Olá, bem-vindo ao meu site! Sou Tininho, um apaixonado desenvolvedor web com foco em front-end que
                    adora
                    aprender novas tecnologias e resolver problemas com código.
                </h3>
                <p>
                    Como Analista de Dados e E-commerce no Laboratório Fantasma, combino meu amor pelo design com minhas
                    habilidades técnicas para criar interfaces incríveis. Com uma experiência freelance, domino
                    HTML, CSS, PHP e JavaScript, criando sites responsivos que oferecem uma ótima experiência em todos
                    os
                    dispositivos.
                </p>
                <p>
                    Minha jornada é repleta de projetos transformadores, onde cada pixel é cuidadosamente pensado para
                    contar histórias envolventes e criar conexões. Além do desenvolvimento, me dedico a garantir que
                    cada
                    site seja não só visualmente atraente, mas também totalmente acessível, reforçando a presença
                    digital
                    das marcas para as quais trabalho.
                </p>
                <p>
                    Estou sempre atualizado com as últimas tendências do mercado, o que me permite manter minhas
                    criações
                    relevantes e inovadoras. Cada linha de código é uma nova oportunidade para criar algo
                    extraordinário.
                    Obrigado por visitar meu site e conhecer um pouco mais sobre mim. Espero que você tenha gostado de
                    navegar pelos meus projetos.
                </p>

                <a href="#contact" class="btn">Contate</a>
            </div>
        </section>

        <!-- services section design -->
        <section class="services" id="services">
            <h2 class="heading">Minhas <span>Habilidades</span></h2>

            <div class="services-container">
                <div class="services-box">
                    <i class='bx bx-code-alt'></i>
                    <h3>Front-End Development</h3>
                    <p>Especialista em Front-End, utilizo HTML, CSS e JavaScript para criar interfaces que não só
                        cativam
                        visualmente, mas também oferecem funcionalidade completa. Cada projeto é meticulosamente
                        desenvolvido para assegurar uma experiência de usuário impecável.</p>
                    <a href="#contact" class="btn">Contate</a>
                </div>
                <div class="services-box">
                    <i class='bx bx-server'></i>
                    <h3>Back-End Development</h3>
                    <p>No Back-End, desenvolvo soluções robustas que formam a espinha dorsal dos aplicativos web,
                        integrando
                        lógicas complexas e APIs poderosas. Com uma sólida experiência em PHP e sistemas de banco de
                        dados,
                        asseguro uma integração perfeita e eficiente entre back-end e front-end.</p>
                    <a href="#contact" class="btn">Contate</a>
                </div>
                <div class="services-box">
                    <i class='bx bx-line-chart'></i>
                    <h3>Business Intelligence</h3>
                    <p>Em Business Intelligence, converto dados brutos em insights estratégicos, empregando ferramentas
                        avançadas como Power BI. Minha análise detalhada permite identificar tendências e orientar
                        decisões
                        corporativas, impulsionando o crescimento sustentável e a eficiência operacional.</p>
                    <a href="#contact" class="btn">Contate</a>
                </div>

            </div>
        </section>

        <!-- portfolio section design -->
        <section class="portfolio" id="portfolio">
            <h2 class="heading">Últimos <span>Projetos</span></h2>

            <div class="portfolio-container">
                <div class="portfolio-box">
                    <img src="assets/imgs/caio-site.jpg" alt="">

                    <div class="portfolio-layer">
                        <h4>Site - Caio Martins</h4>
                        <p>Descubra o encanto e a magia de Caio Martins, um talentoso mágico que traz espetáculos únicos
                            para seu público. Este site foi desenvolvido para capturar a essência de suas performances,
                            com
                            uma navegação intuitiva e design que reflete a arte da magia.</p>
                        <a href="https://www.caiomartinsomagico.com" target="_blank"><i
                                class='bx bx-link-external'></i></a>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="assets/imgs/caio-admin.jpg" alt="">

                    <div class="portfolio-layer">
                        <h4>ADM - Site Caio Martins</h4>
                        <p>Explore a seção administrativa do site de Caio Martins, projetada para gerenciar
                            eficientemente
                            agenda, banners e contatos. Esta plataforma facilita atualizações rápidas e eficazes,
                            assegurando que o conteúdo do site esteja sempre atualizado e dinâmico.</p>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="assets/imgs/pbi-lab.jpg" alt="">

                    <div class="portfolio-layer">
                        <h4>Painel - LAB</h4>
                        <p>Descubra o Painel LAB, uma solução abrangente desenvolvida no Power BI para gerenciar e
                            visualizar dados cruciais de negócios. Este painel permite análises detalhadas através de
                            módulos como faturamento, e-commerce, logística e muito mais, proporcionando insights
                            valiosos
                            que otimizam as operações e estratégias empresariais.</p>
                    </div>
                </div>
        </section>

        <!-- testimonial design -->
        <div class="testimonial-container">
            <h2 class="heading">Meus <span>Clientes</span></h2>

            <div class="testimonial-wrapper">
                <div class="testimonial-box mySwiper">
                    <div class="testimonial-content swiper-wrapper">
                        <div class="testimonial-slide swiper-slide">
                            <img src="assets/imgs/caio.jpg" alt="">
                            <h3>Caio Martins</h3>
                            <p>"Trabalhar com Tininho foi uma experiência transformadora! O desenvolvimento do meu site
                                foi
                                conduzido com maestria, combinando funcionalidade e estética de maneira excepcional. As
                                soluções personalizadas não apenas elevaram minha presença digital, mas também
                                refletiram
                                perfeitamente minha personalidade e objetivos profissionais. A atenção aos detalhes e o
                                comprometimento com a qualidade foram evidentes em cada etapa do processo."</p>
                        </div>
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <!-- contact section design -->
        <section class="contact" id="contact">
            <h2 class="heading">Me <span>Contate</span></h2>

            <form action="#">
                <div class="input-box">
                    <input type="text" placeholder="Nome">
                    <input type="email" placeholder="E-mail">
                </div>
                <div class="input-box">
                    <input type="number" placeholder="Telefone">
                </div>
                <textarea name="" id="" cols="30" rows="10"
                    placeholder="Ex. Gostaria de solicitar um orçamento para criação de um site"></textarea>
                <input type="submit" value="Enviar" class="btn">
            </form>
        </section>

    </main>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright © 2025 | Tininho Fita - Todos os direitos reservados.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>


    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js -->
    <script src="assets/js/global.js"></script>
</body>

</html>