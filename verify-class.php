<?php

require 'conn.php';

$service = $_POST['servicos'];
$logger = $_POST['logado'];

$stmt = $db->prepare("SELECT * FROM classes where nome = '$service'  ");

$stmt->execute();

$linhas = $stmt->fetch(PDO::FETCH_ASSOC);

$classe= $linhas['codigo'];

$_SESSION['classe'] = $classe;


$stmt = $db->prepare("UPDATE users SET classe='$classe' WHERE login='$logger';");

$stmt->execute();

header('location:src/defiance3.php');


?>  