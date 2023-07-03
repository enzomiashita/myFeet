<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Sneakers Shop</title>
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
        <div class="conteudo">
            <p id="titulo_localizacao"><b>Bem-vindo à My Feet - O seu destino para os melhores tênis!</b></p>
            <iframe style="border-radius:15px; width: 700px; height: 350px; border: 1px solid black; margin-top: 50px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.9050869207267!2d-48.03061032387678!3d-15.861585024615101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a326fb9b303ed%3A0x1526a61ebb69aee9!2sEscola%20T%C3%A9cnica%20de%20Bras%C3%ADlia!5e0!3m2!1spt-BR!2sbr!4v1685578122266!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="texto_box">    
                <p class="texto">Venha nos visitar na loja física My Feet e descubra uma ampla seleção de tênis de alta qualidade e os últimos lançamentos das melhores marcas esportivas. <br>
                Nossa loja está convenientemente localizada em um local de fácil acesso, proporcionando uma experiência única para os entusiastas de tênis.</p>
            </div>

            <div class="texto_box">  
                <p class="texto">Nossa loja é um espaço moderno e acolhedor, projetado para criar uma atmosfera agradável para os clientes.<br>
                Nossos especialistas em tênis estão sempre prontos para ajudá-lo a encontrar o par perfeito que atenda às suas necessidades e estilo. <br>
                Seja você um atleta profissional ou um amante de tênis casual, temos opções para todos os níveis de habilidade e preferências.</p>
            </div>
            <div class="texto_box">
                <p class="texto">Não deixe de aproveitar a oportunidade de experimentar os produtos pessoalmente, sentir o ajuste perfeito e receber conselhos especializados de nossa equipe.<br>
                Se você estiver em busca de um novo par de tênis para o seu esporte favorito ou simplesmente deseja atualizar seu estilo, visite a My Feet e encontre exatamente o que procura.</p>
            </div>  

            <div class="texto_box">
                <p class="texto">Estamos ansiosos para recebê-lo em nossa loja e ajudá-lo a encontrar o tênis perfeito para aprimorar sua performance e estilo.<br>
                Venha nos visitar hoje mesmo na My Feet e descubra uma experiência única em calçados esportivos!</p>
            </div>
            
            
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