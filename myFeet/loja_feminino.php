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
                    <li><a href=""><img src="tenis12.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Air Jordan 1 Low Feminino Verde</p>
                    <p class="preco_anterior">R$ 1567,99</p>
                    <p>R$ 1099,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis13.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Nike Air Force 1 Feminino</p>
                    <p class="preco_anterior">R$ 1555,99</p>
                    <p>R$ 1289,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis14.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Nike Air Force 1 '07 SE Feminino</p>
                    <p class="preco_anterior">R$ 999,99</p>
                    <p>R$ 799,99</p>
                </div>

                <br>

                <div class="tenis">
                    <li><a href=""><img src="tenis15.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Nike Air Force 1 Feminino</p>
                    <p class="preco_anterior">R$ 1099,99</p>
                    <p>R$ 899,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis16.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Nike Court Vision Alta Feminino</p>
                    <p class="preco_anterior">R$ 649,99</p>
                    <p>R$ 439,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis17.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Nike Air Max INTRLK Lite Feminino</p>
                    <p class="preco_anterior">R$ 579,99</p>
                    <p>R$ 469,99</p>
                </div>

                <br>

                <div class="tenis">
                    <li><a href=""><img src="tenis18.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Air Jordan 1 Low Feminino</p>
                    <p class="preco_anterior">R$ 1279,99</p>
                    <p>R$ 1099,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis19.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Air Jordan 1 Mid Feminino</p>
                    <p class="preco_anterior">R$ 1259,99</p>
                    <p>R$ 1199,99</p>
                </div>

                <div class="tenis">
                    <li><a href=""><img src="tenis20.jpg" class="img"></a></li>
                    <p class="nome_tenis">Tênis Nike Air Force 1 '07 Next Nature Feminino</p>
                    <p class="preco_anterior">R$ 889,99</p>
                    <p>R$ 799,99</p>
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