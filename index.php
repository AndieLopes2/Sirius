<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="img/teste.png" alt="logo">
                </span>

                <div class="text header-text">
                    <span class="name">SIRIUS</span>
                    <span class="profession">Desenvolvedora</span>
                </div>
            </div>
            <span class="material-symbols-outlined toggle">
                keyboard_arrow_right
                </span>
        </header>

        <div class="menu-bar">
            <div class="menu">
               
                <li class="search-box">
                    <i class='bx bx-search icon' ></i>
                        <input id="procura" type="search" placeholder="Procurar...">
                </li>
                <ul class="menu-links">
                    <li class="nav-links">
                        <a href="index.php">
                            <i class='bx bx-home icon'></i>
                            <span class="text nav-text">Página Inicial</spn>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="beawake.html">
                            <i class='bx bx-game icon'></i>
                            <span class="text nav-text">Be Awake</spn>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="#sobre">
                            <i class='bx bx-pie-chart-alt-2 icon'></i>
                            <span class="text nav-text">O que é a Sirius?</spn>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="https://www.instagram.com/sirius_desenvolvedora/">
                            <i class='bx bxl-instagram icon'></i>
                            <span class="text nav-text">Contato</spn>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="desen.html">
                            <i class='bx bx-desktop icon'></i>
                            <span class="text nav-text">Desenvolvedores</spn>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="nav-links">
                    <a href="login.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Sair</spn>
                    </a>
                </li> 

                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Modo Escuro</span>

                   <div class="toggle-switch">
                        <span class="switch"></span>
                    </div> 
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="text">SIRIUS</div>


        <div class="wrapper">
            <div class="container">
                <input class="inputt" type="radio" name="slide" id="c1" checked>
                <label for="c1" class="card">
                    <div class="row">
                        <div class="icon">1</div>
                        <div class="description">
                            <h4>Be Awake</h4>
                            <p>O jogo que te manterá acordado - Sirius</p>
                        </div>
                    </div>
                </label>
                
                <input class="inputt" type="radio" name="slide" id="c2" >
                <label for="c2" class="card">
                    <div class="row">
                        <div class="icon">2</div>
                        <div class="description">
                            <h4>Sirius</h4>
                            <p>A nova desenvolvedora de jogos que garantirá sua diverção</p>
                        </div>
                    </div>
                </label>
                <input class="inputt" type="radio" name="slide" id="c3" >
                <label for="c3" class="card">
                    <div class="row">
                        <div class="icon">3</div>
                        <div class="description">
                            <h4>Bla bla bla bla </h4>
                            <p>bla bla bla </p>
                        </div>
                    </div>
                </label>
                <input class="inputt" type="radio" name="slide" id="c4" >
                <label for="c4" class="card">
                    <div class="row">
                        <div class="icon">4</div>
                        <div class="description">
                            <h4>bla bla bla </h4>
                            <p>bla bla bla</p>
                        </div>
                    </div>
                </label>
            </div>
        </div>    

        <br><br>
        
        <div class="text" id="sobre">O que é a Sirius?</div> <br>
        
        <main class="caixa">
            <section class="textoo" id="introducao">
                
                <p>Bem-vindo à Sirius, onde o terror se torna uma arte em pixels. Somos uma equipe 
                    coletiva apaixonada por criar jogos de terror 2D com uma estética pixelizada que 
                    traz um charme único e uma imersão intensa.</p>
            </section>
            </main>

            <br>
            <div class="text">Quem Somos</div> <br>
            <main class="caixa">
            <section class="textoo" id="quem-somos">
               
                <p>Na Sirius, somos um grupo de desenvolvedores, designers e artistas especializados 
                    em criar experiências de terror em 2D. Cada membro da nossa equipe contribui com 
                    uma habilidade especial e uma visão criativa para garantir que nossos jogos sejam
                     não apenas assustadores, mas também visualmente cativantes. Juntos, 
                     transformamos o estilo pixelizado em uma poderosa ferramenta para narrativas 
                     envolventes e atmosféricas.</p>
            </section>
        </main>

        <br>
        <div class="text">O Que Fazemos</div> <br>
        <main class="caixa">
            <section class="textoo" id="o-que-fazemos">
                <p>Nos dedicamos a criar jogos de terror em 2D que capturam a essência do medo com
                     um toque nostálgico. Nossos jogos utilizam gráficos pixelizados que evocam uma
                      sensação de nostalgia enquanto criam uma atmosfera intensa e imersiva. A combinação
                       de enredos intrigantes e visuais distintivos permite que cada jogo ofereça uma 
                       experiência única, rica em detalhes e suspense.</p>
            </section>
        </main>

        <br>
        <div class="text">Por Que Escolher-nos?</div> <br>
        <main class="caixa">
            <section class="textoo" id="por-que-escolher-nos">
                <ul class="lista">
                    <li><strong>Estilo Único:</strong> Nossos jogos 2D pixelizados oferecem um estilo visual exclusivo que mistura o charme retrô com o terror moderno.</li>
                    <li><strong>Imersão Profunda:</strong> Criamos ambientes detalhados e histórias envolventes que capturam a essência do medo e mantêm os jogadores na ponta do assento.</li>
                    <li><strong>Equipe Apaixonada:</strong> Nossa equipe é composta por entusiastas do terror e do estilo pixelizado, comprometidos em criar experiências que são tanto emocionantes quanto memoráveis.</li>
                </ul>
            </section>
        </main>

        <br>
        <div class="text">Nosso Compromisso</div> <br>
        <main class="caixa">
            <section class="textoo" id="compromisso">
                <p>Nós nos comprometemos a criar jogos de terror que não só homenageiam o estilo 
                    retrô dos pixels, mas também fornecem uma experiência de jogo profundamente 
                    envolvente. Trabalhamos com atenção aos detalhes e paixão para garantir que cada 
                    título seja uma verdadeira obra-prima do terror 2D.</p>
            </section>
        </main>

        <br>
        <div class="text">Entre em Contato</div> <br>
        <main class="caixa">
            <section class="textoo" id="contato">
                <p>Para mais informações sobre nossos jogos ou para discutir uma colaboração, 
                    não hesite em entrar em contato conosco. Estamos ansiosos para criar algo 
                    extraordinário juntos!</p>
            </section>
        </main>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br>

        <footer class="roda_pe" id="roda_pe">
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>

            </div>
            <ul class="social_icon">
                <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                <li><a href="#"><i class='bx bxl-linkedin-square' ></i></a></li>
                <li><a href="#"><i class='bx bxl-instagram' ></i></a></li>
            </ul>
            <ul class="menu_rodaPe">
                <li><a href="index.html">Página Inicial</a></li>
                <li><a href="#">Be Awake</a></li>
                <li><a href="#sobre">O que é a Sirius?</a></li>
                <li><a href="desen.html">Desenvolvedores</a></li>
            </ul>
            <p>2024 Compras de Jogos Online | Garanta já o seu</p>
        </footer>
    </section>
     
  
</body>
<script src="js/script.js"></script>
</html>