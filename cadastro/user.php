<?php

    require '../conn.php';

    $stmt = $db->prepare("INSERT INTO users(nome, login, senha, cpf, celular, email, razaosocial, cep, estado, cidade, rua, numero, complemento, termo) VALUES(:NOME, :LOGIN, :SENHA, :CPF, :CELULAR, :EMAIL,:RAZAOSOCIAL,:CEP,:ESTADO,:CIDADE,:RUA,:NUMERO,:COMPLEMENTO, :TERMO)");
    
    
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $razaosocial = $_POST['razaosocial'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $termo = 1;    

    $stmt-> bindParam(":LOGIN", $login);
    $stmt-> bindParam(":SENHA", $senha);
    $stmt-> bindParam(":NOME", $nome);
    $stmt-> bindParam(":EMAIL", $email);
    $stmt-> bindParam(":CPF", $cpf);
    $stmt-> bindParam(":CELULAR", $celular);
    $stmt-> bindParam(":RAZAOSOCIAL", $razaosocial);
    $stmt-> bindParam(":CEP", $cep);
    $stmt-> bindParam(":ESTADO", $estado);
    $stmt-> bindParam(":CIDADE", $cidade);
    $stmt-> bindParam(":RUA", $rua);
    $stmt-> bindParam(":NUMERO", $numero);
    $stmt-> bindParam(":COMPLEMENTO", $complemento);
    $stmt-> bindParam(":TERMO", $termo);

    
    $stmt->execute();


    session_start();

    
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

   header('Location: ../index.php');

    







?>
