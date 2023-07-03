<?php 
    session_start();
    if(!isset($_SESSION['id_adm'])) {
        header("location: login.php");
        exit;
    }

    require_once 'sql.php';
    $classe = new Usuario;
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
                            <li class="menu_item"><a class="ola_usuario"><button>Olá, Enzo</button></a></li>
                        </div>

                        <div class="link_login">
                            <li class="menu_item"><a href="sair.php" class="navegacao_usuario"><button id="botao_sair" >Sair</button></a></li>
                        </div>
                        
                    </ul>       
                </div>
            </div>
        </nav>

        
    </header>

    <main>
        <h1>Tabela clientes</h1>    
        <div class="caixa_botao">
            <form method="POST">
                <input type="submit" name="alterar" class="botao_tabela" value="Modificar">
            </form> 
        </div>
       <?php 
            if(isset($_POST['alterar'])) {
              
                header("location: altera.php");
                
            }

        ?>

        <div class="caixa_tabela">
            
            <div class="tabela_clientes">
                <table >
                    <tr>
                        <th>Cliente / N°</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Data de nascimento</th>
                        <th>Cpf</th>
                        <th>Endereço</th>
                        <th>Email</th>
                    </tr>
                    <?php 
                    $classe->conectar();
                    $classe->cliente(); 
                    ?>
                    
                </table>
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