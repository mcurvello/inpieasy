<?php
require '../conn.php';


$stmt = $db->prepare("SELECT * FROM users where id = '$idPost'  ");

$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

