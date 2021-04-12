<!DOCTYPE html>
<html lang="pt-br">
<head>
    
<?php

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
    <link rel="stylesheet" href="../styles/page-landing.css" />
    <link rel="stylesheet" href="../styles/defiance.css" />

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
                        <a href="">Link de acesso 1</a>
                        <a href="">Link de acesso 2</a>
                        <a href="">Link de acesso 3</a>
                        <a href="">Link de acesso 4</a>
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
                    <h2>Registro de Marca</h2>
                    <span>Uma nova forma de consolidar sua marca</span>
                </div>
            </sub>
            <nav>
                <a href="">
                    <button>1</button>
                    <p>Motivação</p>
                </a>
                <a href="">
                    <button>2</button>
                    <p>Consulta</p>
                </a>
                <a href="">
                    <button>3</button>
                    <p>Marca</p>
                </a>
                <a href="">
                    <button>4</button>
                    <p>Logotipo</p>
                </a>
            </nav>
            <section id="defiance">
                <div>
                    <h1><?= strtoupper($logado)?> você sabe em qual classe o segmento do seu negócio se enquadra?</h1>
                    <p>
                        Você precisa fazer uma pesquisa para verificar possíveis empresas registradas com o nome da sua marca. Para isso vamos te ajudar a sabe a qual classe de serviço seu negócio se enquadra.
                    </p>
                </div>
                <div id="choices">
                <form action="../verify-class.php" method="POST"> 
                <h5>Produtos</h5>
                    <input name="produtos" type="text" placeholder="Produtos">
                    <h5>Serviços</h5>
                    <input name="servicos" type="text" placeholder="Serviços">
                    <span>Propaganda; gestão de negócios; administração de negócios; funções de escritório.
                        Guarde essa informação para a próxima etapa.</span>
                     <input type="hidden" name="logado" value="<?=$logado?>">   
                </div>
            </section>
            <footer id="footer">
                <button id="button-cancel">Cancelar</button>
                <div>
                    <button id="button-back">Voltar</button>
                    <button id="button-next">Avançar</button>
                </div>
                </form>
            </footer>
        </div>

    </div>
</body>
</html>