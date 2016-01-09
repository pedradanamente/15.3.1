<?php
session_start();
require('../conexao.php');
require('../banco.php');
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	if (isset($_POST['buttonUninstall'])){
		if (md5($_POST['k']) === "129631119886a9cd13a247852afe9348"){
			
			uninstall();
			echo "<script>alert('A FERRAMENTA FOI RESETADA');</script>";
		}
		else {
			echo "<script>alert('Invalid password!');</script>";
		}
	}
	session_destroy();
	echo "<script>location.href='../index.php';</script>";
}
?>