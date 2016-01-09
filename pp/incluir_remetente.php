<?php
session_start();
require('../conexao.php');
require('../banco.php');
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	$login=check_input($_POST['login']);
	$senha=check_input($_POST['senha']);
	$remetente=check_input($_POST['remetente']);
	$id_remetente=check_input($_POST['id_remetente']);
	$userid=$_SESSION['userid'];
	
	incluir_remetente($userid,$login,$senha,$remetente,$id_remetente);
	$conexao->close();
	header('location: ../index.php?url=configuracao');
}
?>