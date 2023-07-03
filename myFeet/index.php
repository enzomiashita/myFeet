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
            <nav class="section_tenis">
                <a href="index.php">Masculino</a>
                |
                <a href="loja_feminino.php">Feminino</a>
            </nav>

            <ul>
                <div class="tenis">
                    <li><a href="tenis1.php"><img src="tenis3.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Nike Tanjun Next Nature Masculino</p>
                    <p class="preco_anterior">R$ 549,99</p>
                    <p>R$ 379,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis4.jpg" class="img"></a></li>
                    <p class="nome_tenis">Air Force 1 Mid</p>
                    <p class="preco_anterior">R$ 1599,99</p>
                    <p>R$ 1.199,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis5.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Nike Dunk High Retro Masculino</p>
                    <p class="preco_anterior">R$ 799,99</p>
                    <p>R$ 609,99</p>
                </div>

                <br>

                <div class="tenis">
                    <li><a href=""><img src="tenis21.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Air Jordan 1 Low Masculino</p>
                    <p class="preco_anterior">R$ 1200,00</p>
                    <p>R$ 1099,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis7.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Jordan One Take 4 Masculino</p>
                    <p class="preco_anterior">R$ 1476,99</p>
                    <p>R$ 999,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis8.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Nike Air Force 1 Flyease Masculino</p>
                    <p class="preco_anterior">R$ 999,99</p>
                    <p>R$ 799,99</p>
                </div>

                <br>

                <div class="tenis">
                    <li><a href=""><img src="tenis9.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Nike Tanjun Next Nature Masculino</p>
                    <p class="preco_anterior">R$ 549,00</p>
                    <p>R$ 299,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis10.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Air Jordan 1 Low SE Masculino</p>
                    <p class="preco_anterior">R$ 1340,99</p>
                    <p>R$ 1279,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis11.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Nike Air Max 90 SE Masculino</p>
                    <p class="preco_anterior">R$ 1000,99</p>
                    <p>R$ 719,99</p>
                </div>


            </ul>
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