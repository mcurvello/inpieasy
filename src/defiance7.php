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

$logado = $_SESSION['login'];?>
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
            
            <section id="defiance">
                <div>
                    <h1>%username%, parab??ns, seu pedido de registro foi enviado!</h1>
                    <p>
                        Agora ele passar?? por exame pela equipe respons??vel e em breve voc?? receber?? um retorno. <br>
                        <strong>Aten????o:</strong>  Poder??o ser formuladas exig??ncias que devem ser cumpridas <strong>em 5 dias</strong>, por tanto fique atenta, avisaremos por aqui sobre o andamento. <br>
                        Voc?? pode optar por receber a notifica????o da movimenta????o do seu processo de registro. 
 


                    </p>
                </div>
                <div id="choices">
                    <div>
                        <button><a href="">Receber notifica????es pelo Whatsapp</a></button>
                    </div>
                    <div>
                        <button><a href="">Receber notifica????es por e-mail</a></button>
                    </div>
                    
                </div>
            </section>
            <footer id="footer">
                <button id="button-cancel">Cancelar</button>
                <div>
                    <button id="button-back">Voltar</button>
                    <button id="button-next"><a href="defiance8.php"> Avan??ar </a></button>
                    
                </div>
            </footer>
        </div>

    </div>
</body>
</html>