<?php 
    session_start();
    if(!isset($_SESSION['id_cliente'])) {
        header("location: login.php");
        exit;
    }

    require_once 'sql.php';
    $classe = new Usuario;

    $classe->conectar();
    $id = $_SESSION['id_cliente'];
    $nome = $classe->info("nome", $id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Sneakers Shop - ADM</title>
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
                        <div class="caixa_ola_usuario">
                            <li class="menu_item"><a class="ola_usuario"><button>Olá, <?php echo $nome; ?></button></a></li>
                        </div>

                        <div class="link_login">
                            <li class="menu_item"><a href="sair_usuario.php" class="navegacao_usuario"><button id="botao_sair" >Sair</button></a></li>
                        </div>
                        
                    </ul>       
                </div>
            </div>
        </nav>

        
    </header>

    <main>
        <?php
            $classe->conectar();
            $id = $_SESSION['id_cliente'];
            $nome = $classe->info("nome", $id);
            $telefone = $classe->info("telefone", $id);
            $data = $classe->info("data_nascimento", $id);
            $cpf = $classe->info("cpf", $id);
            $endereco = $classe->info("endereco", $id);
            $email = $classe->info("email", $id);
        ?>
        <div class="conteudo">
            <div class="info_pessoais">
                <div class="divisao1">
                    <p style="margin-top: 215px; font-size: 1.56em;">Informações da conta</p>
                </div>

                <div class="divisao2">
                    <div class="caixa_campos">
                        <p class="nome_campos_pessoais">ﾠNomeﾠﾠ</p>
                        <p class="campos_pessoais"><?php echo $nome; ?></p>
                        <br>
                    </div>

                    <div class="caixa_campos">
                        <p class="nome_campos_pessoais">Telefoneﾠ</p>
                        <p class="campos_pessoais"><?php echo $telefone; ?></p>
                        <br>
                    </div>
                    
                    <div class="caixa_campos">
                        <p class="nome_campos_pessoais">ﾠDataﾠﾠﾠ</p>
                        <p class="campos_pessoais"><?php echo $data; ?></p>
                        <br>
                    </div>

                    <div class="caixa_campos">
                        <p class="nome_campos_pessoais">ﾠCPFﾠﾠﾠﾠ</p>
                        <p class="campos_pessoais"><?php echo $cpf; ?></p>
                        <br>
                    </div>


                    <div class="caixa_campos">
                        <p class="nome_campos_pessoais">Endereço</p>
                        <p class="campos_pessoais"><?php echo $endereco; ?></p>
                        <br>
                    </div>

                    <div class="caixa_campos">
                        <p class="nome_campos_pessoais">ﾠEmailﾠﾠ</p>
                        <p class="campos_pessoais"><?php echo $email; ?></p>
                        <br>
                    </div>
                </div>
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