<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Sneakers Shop</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      
    }
    
    h1 {
      color: #333;
      font-size: 32px;
      text-align: center;
      margin-bottom: 20px;
    }
    
    p {
      color: #666;
      font-size: 16px;
      line-height: 1.6;
      text-align: justify;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
    <header>
        <h2 class="logo"><a href="index.php">My Feet</a></h2>
        <nav class="nav">
            <a href="index.php" class="navegacao_site">Loja</a>
            <a href="localizacao.php" class="navegacao_site">Localização</a>
            <a href="contato.php" class="navegacao_site">Contato</a>
            <a href="sobre.php" class="navegacao_site">Sobre</a>
            <a href="ajuda.php" class="navegacao_site">Ajuda</a>
            <span>|</span>
            <div style="display: inline-block; margin-bottom: 15px; ">
                <button class="botao_usuario" onclick="menuShow()"><img src="usuario2.png"></button>

                <div class="menu_login">
                    <ul>
                        <div class="link_login">
                            <li class="menu_item"><a href="login.php" class="navegacao_usuario"><button>Login</button></a></li>
                        </div>

                        <div class="link_login">
                            <li class="menu_item"><a href="cadastra.php" class="navegacao_usuario"><button> Registrar </button></a></li>
                        </div>
                    </ul>       
                </div>
            </div>
        </nav>

        
    </header>

    <main>
        <div class="conteudo" style="margin: auto 20px;">
            <h1>Sobre o Meu Site - My Feet</h1>
        
            <p>
            Bem-vindo à My Feet - a loja online que se dedica a proporcionar conforto e estilo por meio de calçados incríveis! Estamos aqui para oferecer a você uma experiência única de compra, onde o conforto e a moda andam lado a lado.
            </p>
            
            <p>
            Na My Feet, acreditamos que cada passo importa. Nossa paixão por tênis vai além do simples ato de calçar. Queremos que você encontre o par perfeito que se ajuste ao seu estilo de vida, adicionando confiança e estilo a cada passo que você der.
            </p>
            
            <p>
            Nosso compromisso é garantir que cada visita ao nosso site seja uma jornada inesquecível. Queremos criar um espaço onde todos possam se sentir bem-vindos, independentemente do seu estilo pessoal, idade ou preferências.<br> Acreditamos que todos merecem encontrar tênis que unam conforto excepcional, qualidade superior e designs modernos.
            </p>
            
            <p>
            A My Feet nasceu do desejo de fornecer uma experiência de compra online excepcional. Nossa equipe dedicada trabalha incessantemente para selecionar cuidadosamente os melhores tênis do mercado, buscando marcas renomadas e modelos que <br>se destaquem em termos de estilo e desempenho. Queremos que você tenha acesso a uma variedade diversificada de opções, garantindo que encontre exatamente o que procura.
            </p>
            
            <p>
            Além de oferecer produtos excepcionais, estamos comprometidos em fornecer um atendimento ao cliente excepcional. Acreditamos que cada cliente é único e merece ser tratado com o máximo de atenção e cuidado. Nossa equipe de suporte está pronta<br> para ajudar, responder a quaisquer dúvidas ou fornecer assistência sempre que necessário. Sua satisfação é nossa prioridade número um.
            </p>
            
            <p>
            Na My Feet, buscamos ir além de ser apenas uma loja de tênis. Queremos inspirar confiança e elevar a autoestima de nossos clientes. Sabemos que a escolha do calçado certo pode ter um impacto poderoso na forma como você se sente e se apresenta<br> ao mundo. É por isso que nos esforçamos para criar uma coleção diversificada que atenda a diferentes gostos e necessidades, mantendo sempre o conforto como prioridade.
            </p>
        </div>
        
    </main>

    <footer>
        
            <div class="caixa_rodape">
              <img src="logo.jpg" class="logo_rodape" alt="logo">

              <div class="copyright">
                <p>© 2023 - Enzo vinicius</p>
              </div>

              <div class="redes_sociais">
                  <span class="icon_rede_sociais"><ion-icon name="logo-instagram"></ion-icon></span><br>
                  <span class="icon_rede_sociais"><ion-icon name="logo-twitter"></ion-icon></ion-icon></span><br>
                  <span class="icon_rede_sociais"><ion-icon name="logo-whatsapp"></ion-icon></ion-icon></span>
              </div>
              
            </div>

        
    </footer>

    <script type="text/javascript" src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>