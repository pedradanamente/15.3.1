<?php
session_start();
require('../conexao.php');
require('../banco.php');
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}
else {
	$usuario=check_input($_POST['usuario']);
	$senha=md5($_POST['senha']);
	$var=check_input($_POST['userid']);
	if ($_POST['limite']<=400)
		$limite=$_POST['limite'];
	else
		$limite = 400;
	
	incluir_usuario($usuario,$senha,$var,$limite);	
	header('location: ../index.php?url=configuracao');
}
?>