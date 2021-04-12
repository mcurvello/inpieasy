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

                <?php
                require '../conn.php';
                
                
                $stmt = $db->prepare("SELECT * FROM users where login = '$logado'  ");
                
                $stmt->execute();
                $linhas = $stmt->fetch(PDO::FETCH_ASSOC);
                $classe = $linhas['classe']
                
                
                ?>
                    <h1> A classe do seu produto e serviço foi consultada. Seu serviço se encontra na classe <?= $classe?></h1>


                    <h1><?= strtoupper($logado)?>, consulte se a sua marca está disponível</h1>
                    <p>
                        Agora que você já compreendeu os conceitos de marcas e a qual classe o seu segmento se enquadra, faça uma pesquisa no banco de dados para verificar outras marcas existentes com o nome dasejado nesse segmento. São permitidos nomes iguais, desde que em segmentos diferentes.
                    </p>
                </div>
                <div id="choices">
                <form action="../verify-name.php" method="POST"> 
            
                <div>
                        <input type="text" name="marcaName" placeholder="Pesquisar por nome da marca">
                    </div>
                    <div>
                        <input type="text" placeholder="Classificação de Nice - NCL (opcional)">
                    </div>
                    <span>Tipo de pesquisa</span>
                    <div>
                        <label class="container">Radical
                            <input type="radio">
                            <span class="checkmark"></span>
                          </label>
                          
                        <label class="container">Exata
                            <input type="radio">
                            <span class="checkmark"></span>
                          </label>
                     <input type="hidden" name="logado" value="<?=$logado?>">   

                    </div>
                </div>
            </section>
            <footer id="footer">
                <button id="button-cancel">Cancelar</button>
                <div>
                    <button id="button-back">Voltar</button>
                    <button type="submit" id="button-next">Avançar</button>

                </div>
                </form>
            </footer>
        </div>

    </div>
</body>
</html>