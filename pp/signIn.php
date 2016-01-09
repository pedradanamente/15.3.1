<?php
session_start();
require("../conexao.php");
require("../banco.php");

if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION["userid"]))) {
	if (instalado() == 3) {
		$userid=check_input($_POST['userid']);
		$senha=md5($_POST['password']);
		autenticacao($userid,$senha);
		header("location: ../index.php");	
	} else {
		header("location: ../install");	
	}
	$conexao->close();
}
?>