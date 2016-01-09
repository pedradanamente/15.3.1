<?php
ini_set('display_errors', 1);

$dbhostname="xxxx";
$dbusuario="xxxx";
$dbsenha="xxxx";
$meubanquinho="xxxx";

$conexao = new mysqli($dbhostname, $dbusuario, $dbsenha, $meubanquinho);
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>