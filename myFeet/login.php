<?php 
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
    <title>Sneakers Shop</title>
</head>
<body id="body_usuario">
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

        <div class="wrapper">
            

            <div class="caixa_login">
                <h2>Login</h2>
                <form method="POST" class="login">
                    <div class="campos">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="type" name="email" required autocomplete="off">
                        <label>Email</label>
                    </div>

                    <div class="campos">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="senha" required>
                        <label>Senha</label>
                    </div>

                    <div class="lembrar">
                        <label><input type="checkbox" name="lembrar" checked="" style="margin-top: 2px; "> Manter login</label>
                        <a href="#">Esqueceu a senha?</a>
                    </div>

                    <button type="submit" class="botao_login">Login</button>

                    <div class="cadastra_link">
                        <p>Não tem uma conta? <a href="cadastra.php">Registrar</a></p>            
                    </div>

                    <div class="caixa_text_login">
                        <?php 
                            if (isset($_POST['email'])) {   

                                $email = addslashes($_POST['email']);
                                $senha = addslashes($_POST['senha']);

                                $classe->conectar();

                                if($classe->admin($email, $senha)) {
                                    
                                    ?>
                                    <p id="text_login">Login realizado com sucesso!</p>
                                    <?php 
                                    header("location: pagina_adm.php");
                                }else {

                                    if($classe->login($email, $senha)) {
                                        
                                        ?>
                                        <p id="text_login">Login realizado com sucesso!</p>
                                        <?php 
                                        header("location: pagina_usuario.php");
                                    }else {
                                        ?>
                                        <p id="text_login" style="color: red;">Email e/ou senha incorreto(s)!</p>
                                        <?php 
                                    }

                                }
                                

                            }



                        ?>
                    </div>
                </form>
            </div>
        </div> 

    <script type="text/javascript" src="script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>