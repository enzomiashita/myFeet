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
    <style>
        body {
            
        }
    </style>
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
            <div class="imagem_usuario" style="display: inline-block; margin-bottom: 15px; ">
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

    <div class="wrapper" style="height: 650px; margin-top: 5pc; width: 420px;">
            

            <div class="caixa_login">
                <h2>Registrar</h2>
                <form method="POST" class="login">
                    <div class="campos">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" name="nome" required autocomplete="off">
                        <label>Nome do usuário</label>
                    </div>

                    <div class="campos">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" required autocomplete="off">
                        <label>Email</label>
                    </div>

                    <div class="campos">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" id="senha" name="senha" required >
                        <label>Senha</label>
                    </div>

                    <div class="campos">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" id="confirmarSenha" name="confirmar_senha" required >
                        <label>Confirmar senha</label>
                    </div>

                    <div class="lembrar">
                        <label><input type="checkbox" name="termos" style="margin: 8px auto"> Eu aceito os termos e condições</label>
                    </div>

                    <button type="submit" class="botao_login" name="registrar">Registrar</button>

                    <div class="cadastra_link">
                        <p>Já tem uma conta? <a href="login.php">Login</a></p>            
                    </div>

                    <div class="caixa_text_login">
                        <?php 
                            //verificando se existe um valor dentro do input email, quando a pessoa clicar no cadastrar
                            if (isset($_POST['registrar'])) {

                                $nome = addslashes($_POST['nome']);
                                $email = addslashes($_POST['email']);
                                $senha = addslashes($_POST['senha']);
                                $confirmar_senha = addslashes($_POST['confirmar_senha']);

                                $classe->conectar();

                                if($senha == $confirmar_senha) {

                                    if ($classe->cadastrar($nome, $email, $senha, $confirmar_senha)) {
                                        ?>
                                        <p id="text_login">Cadastrado com sucesso!</p>
                                        <?php 
                                    }else {
                                        ?>
                                        <p id="text_login" style="color: red;">Email ja cadastrado!</p>
                                        <?php  
                                    }

                                    }else {
                                    ?>
                                        <p id="text_login" style="color: red;">Senhas não coincidem!</p>
                                    <?php
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