<?php
session_start();
require("../conexao.php");
require("../banco.php");
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	if (isset($_POST["buttonSalvarMetodo"])) {
		$metodo=$_POST['metodoSmtp'];
		$id_remetente=$_POST['id_remetente'];
		
		define_metodo($metodo,$id_remetente);
		$conexao->close();
	}
	header('location: ../index.php?url=configuracao');
}
?>