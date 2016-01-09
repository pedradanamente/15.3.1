<?php
session_start();
require("../conexao.php");
require("../banco.php");
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	if (isset($_POST["SalvarP"])) {

		if (!empty($_FILES['I01']['name'])) {
			$I01 = uploadImagemDoProduto("I01");
		}
		else {
			$I01 = template('I01');
		}
		$U01=$_POST['U01'];
		$T01=$_POST['T01'];
		$P01=$_POST['P01'];
		$D01=$_POST['D01'];

		if (!empty($_FILES['I02']['name'])) {
			$I02 = uploadImagemDoProduto("I02");
		}
		else {
			$I02 = template('I02');
		}
		$U02=$_POST['U02'];
		$T02=$_POST['T02'];
		$P02=$_POST['P02'];
		$D02=$_POST['D02'];

		if (!empty($_FILES['I03']['name'])) {
			$I03 = uploadImagemDoProduto("I03");
		}
		else {
			$I03 = template('I03');
		}
		$U03=$_POST['U03'];
		$T03=$_POST['T03'];
		$P03=$_POST['P03'];
		$D03=$_POST['D03'];

		if (!empty($_FILES['I04']['name'])) {
			$I04 = uploadImagemDoProduto("I04");
		}
		else {
			$I04 = template('I04');
		}
		$U04=$_POST['U04'];
		$T04=$_POST['T04'];
		$P04=$_POST['P04'];
		$D04=$_POST['D04'];
		
		salvar_produtos($I01,$U01,$T01,$P01,$D01,$I02,$U02,$T02,$P02,$D02,$I03,$U03,$T03,$P03,$D03,$I04,$U04,$T04,$P04,$D04);
		$conexao->close();
	}
	header('location: ../index.php?url=template');
}
?>