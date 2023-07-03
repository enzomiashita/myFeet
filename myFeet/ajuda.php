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
      margin: 20px;
    }
    
    h1 {
      color: #333;
      font-size: 32px;
      text-align: center;
      margin-bottom: 20px;
    }
    
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    
    label {
      display: block;
      margin-bottom: 10px;
      color: #666;
    }
    
    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    
    textarea {
      height: 150px;
    }
    
    #botaoEnviar {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
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
        <div class="conteudo">
            <h1>Ajuda</h1>
    
            <form>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="subject">Assunto:</label>
                <input type="text" id="subject" name="subject" required>
                
                <label for="question">Sua dúvida:</label>
                <textarea id="question" name="question" required></textarea>
                
                <button type="submit" id="botaoEnviar">Enviar</button>
            </form>
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