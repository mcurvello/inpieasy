<?php

require 'conn.php';

$marcaName = $_POST['marcaName'];
$logger = $_POST['logado'];

$stmt = $db->prepare("SELECT * FROM marcas where nome = '$marcaName'  ");

$stmt->execute();

$linhas = $stmt->fetch(PDO::FETCH_ASSOC);

if($linhas >  0){
    
var_dump('Essa marca ja existe');

}else{

    $stmt = $db->prepare("UPDATE users SET marca='$marcaName' WHERE login='$logger';");

    $stmt->execute();
    
    header('location:src/defiance4.php');
    
    
}



?>  