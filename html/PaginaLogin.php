<?php

    namespace siteDomestica\HTML;


    require_once("../PHP/domestica/Conexao.php");
    require_once("../PHP/domestica/Consultar.php");


    use siteDomestica\PHP\domestica\Conexao;
    use siteDomestica\PHP\domestica\Consultar

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styleTelaLogin.css">
</head>
    <body>
        <header id="nav">   
            <img id="logo" src="../imagens/iconeSite.png" alt="Icone do Site"> 
            <nav>
                <ul class="navLink">
                    <li><a href="#"><b>Como funciona?</b></a></li>
                    <li><a href="#"><b>Quem Somos?</b></a></li>
                    <li><a href="PaginaCadastrar.php"><b>Cadastre-se</b></a></li>
                    <li><a href="PaginaLogin.php"><b>Login</b></a></li>
                </ul>
            </nav>
        </header>

        <div id="blocoLogin">

        <h3>Login</h3>
        <br><br>
        <h2>Insira abaixo suas informaçoes para login!</h2>

        <div id="formLoginsenha">
        <form method="POST">
            <br><br><label for="tCpf">  <b>CPF:</b> </label>
                 <input type="text" placeholder="Insira o CPF" name="tCpf" id="tCpf" required />
                 
                 <br><br>
                 <label for="tSenha"> <b>Senha:</b> </label>
                 <input type="password" name="tSenha" id="tSenha" placeholder="Insira sua senha">
                <br><br>
                 <br>

                 <div class="btnRadio">
                    <input type="radio" name="tOpcao" id="tOpcao1" value="domestica">
                    <label for="tOpcao">Sou prestador de Serviço</label><br>
                    <input type="radio" name="tOpcao" id="tOpcao2" value="cliente">
                    <label for="tOpcao">Sou contratante</label><br>
                </div>                       

                 <div class="opcoes">  
                    <button class="botao">Entrar </button>
                    <button class="botao">Esqueci a senha</button>
                </div>


                 <?php

                if($_POST['tCpf'] != "" && $_POST['tSenha'] != ""){
                    $conexao = new Conexao();
                    $conexao->conectar();


                    $entrar = new Consultar();
                    $entrar->logar($conexao, $_POST['tCpf'], $_POST['tSenha']);
                    
                }

                ?>

           
                </form>
                </div>
            </body>
            </html>