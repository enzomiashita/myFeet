<?php 
    session_start();
    if(!isset($_SESSION['id_adm'])) {
        header("location: login.php");
        exit;
    }

    require_once 'sql.php';
    $classe = new Usuario();
    $id;
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
        <h1 style="margin-bottom:17px;">Modificar tabela clientes</h1>
        <form method="POST">
            <div class="caixa-botao">
                <input type="submit" name="voltar" value="Voltar" id="botao_voltar">
                <select name="campo_de_busca"> 
                    <option value="">Selecione um campo</option>
                    <option value="id_cliente">ID</option>
                    <option value="nome_cliente">Nome</option>
                    <option value="telefone_cliente">Telefone</option>
                    <option value="data_nascimento_cliente">Data de nascimento</option>
                    <option value="cpf_cliente">Cpf</option>
                    <option value="endereco_cliente">Endereço</option>
                    <option value="email_cliente">Email</option>
                </select>
                <input type="text" name="id" class="input_id" placeholder="Insira algum dado">
                <input type="submit" name="buscar" value="Buscar" id="botao_buscar">
            </div>
        </form>
            <div class="caixa_tabela">
                
                <div class="tabela_clientes">
                        <?php
                        
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            if (isset($_POST['id']) && isset($_POST['buscar'])) {
                                $classe->conectar();
                                $id = $_POST['id']; 
                                $campo = $_POST['campo_de_busca'];


                                if ($classe->analisa($id, $campo)) {
                                    echo '<table>';
                                    echo '<tr>
                                            <th> ID </th>
                                            <th>Nome</th>
                                            <th>Telefone</th>
                                            <th>Data de nascimento</th>
                                            <th>Cpf</th>
                                            <th>Endereço</th>
                                            <th>Email</th>
                                        </tr>';
                                    echo '<tr>';
                                    echo    '<form method="POST">';
                                    echo    '<th class="fundo_diferente">'.$classe->values("id", $campo).'</th>';
                                    echo    '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="nome_cliente" value="'.$classe->values("nome", $campo).'"></th>';
                                    echo    '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="telefone_cliente" value="'.$classe->values("telefone", $campo).'"></th>';
                                    echo    '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="data_nascimento_cliente" value="'.$classe->values("data_nascimento", $campo).'"></th>';
                                    echo    '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="cpf_cliente" value="'.$classe->values("cpf", $campo).'"></th>';
                                    echo    '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="endereco_cliente" value="'.$classe->values("endereco", $campo).'"></th>';
                                    echo    '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="email_cliente" value="'.$classe->values("email", $campo).'"></th>';
                                    echo    '<input class="caixa_texto_cliente" type="hidden" name="ID" value="'.$id.'">';
                                    echo    '<input class="caixa_texto_cliente" type="hidden" name="campo_de_busca" value="'.$campo.'">';
                                    echo    '<input type="submit" name="salvar" value="Salvar" class="botao_salva">';
                                    echo    '<input type="submit"  name="excluir" value="Excluír" class="botao_tabela_excluir">';
                                    echo    '</form>';
                                    echo '</tr>';
                            
                                }else {
                                    echo '<p id="id_valido">Ops! Cliente não encontrado.</p>';
                                    header("refresh:1.5;url=altera.php");
                                }
                            } else if (isset($_POST['voltar'])) {
                                header("location: pagina_adm.php");
                            }
                            

                                if(isset($_POST['salvar'])) {
                                    $classe->conectar();
                                    $nome = addslashes($_POST['nome_cliente']);
                                    $telefone = addslashes($_POST['telefone_cliente']);
                                    $data_nascimento = addslashes($_POST['data_nascimento_cliente']);
                                    $cpf = addslashes($_POST['cpf_cliente']);
                                    $endereco = addslashes($_POST['endereco_cliente']);
                                    $email = addslashes($_POST['email_cliente']);
                                    $id = addslashes($_POST['ID']);
                                    $campo = $_POST['campo_de_busca'];
                                    


                                    $classe->alterarSQL($nome, $telefone, $data_nascimento, $cpf, $endereco, $email, $id, $campo);

                                    header('location: pagina_adm.php');
                                }

                                if(isset($_POST['excluir'])) {
                                    $classe->conectar();
                                    $id = addslashes($_POST['ID']);

                                    $classe->excluir($id);

                                    header("location: pagina_adm.php");
                                }
                        }
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