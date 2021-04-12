<?

require '../conn.php';


$logado = $_POST['logger'];

$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];


$stmt = $db->prepare("UPDATE users SET cep = '$cep', estado = '$estado', cidade='$cidade', rua='$rua', numero='$numero', complemento ='$complemento' WHERE id = 5");

        


$stmt->execute();


header('Location: ../src/sign-up3.php');




?>