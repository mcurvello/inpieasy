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
                    <a href="">Bem Vindo <?= strtoupper($logado)?>!</a>
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
                    <h1>%username%, agora a sua marca terá uma aparência.</h1>
                    <p>Para isso, você deverá enviar o logotipo da sua marca em JPG (945 x 945 pixels (8 cm x 8 cm), 300dpi,  de até 2mb), com fundo branco.
                        Abaixo, selecione qual é o tipo da sua marca.</p>
                </div>
                <div id="choices">
                    <div>
                        <h5>Selecione seu logotipo</h5>
                        <input type="file" class="custom-file-input">
                    </div>
                    <div>
                        <button> <a href="">logo.jpg</a> </button>
                    </div>
                    <div>
                        <h5>Categoria</h5>
                        <input type="text" placeholder="Selecione uma categoria">
                    </div>
                </div>
            </section>
            <footer id="footer">
                <button id="button-cancel">Cancelar</button>
                <div>
                    <button id="button-back">Voltar</button>
                    <button id="button-next"><a href="defiance6.php"> Avançar </a></button>
                </div>
            </footer>
        </div>

    </div>
</body>
</html>