<?php

require 'conn.php';

unset ($_SESSION['login']);
unset ($_SESSION['senha']);
header('Location: ./index.php');


?>