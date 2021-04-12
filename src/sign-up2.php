<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php
require '../conn.php';

 session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

$logado = $_SESSION['login'];

?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPI Easy</title>

    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/page-index.css" />
    <link rel="stylesheet" href="../styles/page-landing.css" />
    <link rel="stylesheet" href="../styles/page-signup.css" />

    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/rawline" type="text/css"/>

</head>
<body>
    <div id="page-landing">
        <div id="container">
            <header id="header">
                <div class="logo">
                    <img src="../public/logo.png" alt="logo">
                    <p>INPI Easy</p>
                </div>
                <div class="menu">
                    <section>
                        <a href="">BEM VINDO <?= strtoupper($_SESSION['login'])?></a>
                    </section>
                    <section>
                        <div>
                            <img src="../public/icon-graph.png" alt="">
                            <img src="../public/icon-call.png" alt="">
                            <img src="../public/icon-chat.png" alt="">
                            <img src="../public/icon-color.png" alt="">
                        </div>
                        <button id="button-login">
                            <img src="../public/icon-avatar.png" alt="avatar">
                            Entrar</button>
                    </section>
                </div>
            </header>
            <sub>
                <img src="../public/icon-menu.png" alt="">
                <div>
                    <h2>INPI Easy</h2>
                    <span>Deixe a sua marca no mundo</span>
                </div>
            </sub>
            <div id="box-signup">
            <form action="../cadastro/user-endereço.php" method="POST">

                <h2>Endereço</h2>
                <h5>CEP</h5>
                <input name="cep" type="text" placeholder="00000-000">
                <h5>Estado</h5>
                <input name="estado" type="text" placeholder="Selecione seu estado">
                <h5>Cidade</h5>
                <input name="cidade" type="text" placeholder="Selecione sua cidade">
                <h5>Rua</h5>
                <input name="rua" type="text" placeholder="Digite o nome da sua rua">
                <h5>Número</h5>
                <input name="numero" type="text" placeholder="Digite o número da sua casa">
                <h5>Complemento</h5>
                <input name="complemento" type="text" placeholder="Ex: casa/apartamento 101">
                <button type="submit">Próximo</button>
                <input name="logger" type="hidden" placeholder="Ex: casa/apartamento 101" value="<?=$logado?>">
                </form>

            </div>
    </div>
</body>
</html>