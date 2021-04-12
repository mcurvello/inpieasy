<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPI Easy</title>

    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="stylesheet" href="./styles/page-index.css" />
    <link rel="stylesheet" href="./styles/page-landing.css" />

    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/rawline" type="text/css"/>

</head>
<body>
    <div id="page-landing">
        <div id="container">
            <header id="header">
                <div class="logo">
                    <img src="./public/logo.png" alt="logo">
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
                            <img src="./public/icon-graph.png" alt="">
                            <img src="./public/icon-call.png" alt="">
                            <img src="./public/icon-chat.png" alt="">
                            <img src="./public/icon-color.png" alt="">
                        </div>
                        <button id="button-login">
                            <img src="./public/icon-avatar.png" alt="avatar">
                            Entrar</button>
                    </section>
                </div>
            </header>
            <sub>
                <img src="./public/icon-menu.png" alt="">
                <div>
                    <h2>INPI Easy</h2>
                    <span>Deixe a sua marca no mundo</span>
                </div>
            </sub>
            <div id="login">
                <section class="left">
                    <img src="./public/img-index.jpeg" alt="">
                </section>
                <section class="right">
                <form action="login/login.php" method="POST">

                    <div class="box-login">
                        <h2>Login</h2>
                        <h5>Usuário</h5>
                        <input name="login" type="text" placeholder="Usuário">
                        <h5>Senha</h5>
                        <input name="senha" type="password" placeholder="Digite sua senha">
                        <div>
                            <h6>Esqueceu sua senha? <a href="">Clique aqui!</a></h6>
                            <button type="submit" class="button-login2">Login</button>
                        </div>
                    </div>
                </form>
                    <button  class="button-sign-up">
                        <div>
                    <a href="src/sign-up.php">    
                    Criar nova conta
                    </a>
</div>
                    </button>
                </section>
            </div>
        </div>

    </div>
</body>
</html>