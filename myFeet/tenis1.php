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
        <p style="display: inline-block; position: absolute; font-family: poppins; font-size: 13.8px;">Loja / Masculino / Tênis</p>
            <div class="img_tenis">
                <img src="tenis3.jpg" class="modelo">
                <img src="tenis1-1.png" class="modelo"><br>
                <img src="tenis1-2.png" class="modelo">
                <img src="tenis1-3.png" class="modelo">
            </div>
            <div class="sobre_tenis">
                <div class="header_tenis">
                    <p class="titulo_tenis">Tênis Nike Tanjun Next Nature Masculino</p>
                    <div class="header2_tenis">
                        <p>Casual</p>
                        <div class="avaliacoes">
                            <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                            <p>5.0</p>
                        </div>
                        <p style="text-decoration: line-through; font-size: 14px;">R$ 549,99</p>
                        <p>R$ 379,99</p>
                        <p style="font-size: 13px;">Ou em até 12x sem juros!</p>
                    </div>
                </div>
                <div class="main_tenis">
                    <form method="POST"> 
                        <div class="caixa_tamanho">
                            <select name="tamanho" class="tamanho_tenis">
                                <option value="">Escolha o tamanho</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                            </select>
                        </div>
                        <div class="botao_compras">
                            <input type="submit" value="Adicionar ao carrinho">
                            <br>
                            <input type="submit" value="Comprar">
                        </div>
                    </form>
                </div>
                <div><hr></div>
            </div>

            <p></p>
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