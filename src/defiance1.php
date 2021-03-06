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
                    <h2>Registro de Marca</h2>
                    <span>Uma nova forma de consolidar sua marca</span>
                </div>
            </sub>
            <nav>
                <a href="">
                    <button>1</button>
                    <p>Motiva????o</p>
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
                    <h1>Ol?? <?= strtoupper($_SESSION['login'])?></h1>
                    <p>
                        Voc?? est?? no caminho para sua certifica????o de marca, essa jornada te ajudar?? a certificar sua marca por 10 anos e ter mais seguran??a. <br>
                        Antes de come??armos h?? algumas coisas que voc?? precisa saber...
                        <br>
                        Voc?? j?? conhece as defini????es de marca e suas diferen??as? Confira o material que disponibilizamos para se informar a respeito.
                    </p>
                </div>
                <div id="choices">
                    <img src="../public/box-film.png" alt="">
                    <section>
                        <button> <a href="http://manualdemarcas.inpi.gov.br/projects/manual/wiki/02_O_que_%C3%A9_marca">O que ?? marca - Manual de Marcas.pdf</a></button>
                        <button><a href="http://manualdemarcas.inpi.gov.br/">Manual de Marcas.pdf</a></button>
                    </section>
                </div>
            </section>
            <footer id="footer">
                <button id="button-cancel">Cancelar</button>
                <div>
                    <button id="button-back">Voltar</button>
                    <a href="defiance2.php"><button id="button-next"> Avan??ar</button></a>
                </div>
            </footer>
        </div>

    </div>
</body>
</html>