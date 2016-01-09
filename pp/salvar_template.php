<?php
session_start();
require("../conexao.php");
require("../banco.php");
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	if (isset($_POST["buttonSalvarTemplate"])) {
		$empresa=check_input($_POST['empresa']);
		$site=check_input($_POST['site']);
		$cnpj=check_input($_POST['cnpj']);
		$telefone=check_input($_POST['telefone']);
		$id_remetente=check_input($_POST['id_remetente']);
		$corTitulo=check_input($_POST['corTitulo']);
		$corLetraTitulo=check_input($_POST['corLetraTitulo']);
		$corSeparador=check_input($_POST['corSeparador']);
		$corFundo=check_input($_POST['corFundo']);
		$corRodape=check_input($_POST['corRodape']);
		$corLetraRodape=check_input($_POST['corLetraRodape']);
		$corBorda=check_input($_POST['corBorda']);
		$corP1=check_input($_POST['corP1']);
		$corP2=check_input($_POST['corP2']);
		$corP3=check_input($_POST['corP3']);
		$corP4=check_input($_POST['corP4']);
		$Frasedomeio=check_input($_POST['Frasedomeio']);
		$corFundoFrasedomeio=check_input($_POST['corFundoFrasedomeio']);
		$banner=check_input($_POST['banner']);
		if (isset($_POST['hiddenprodutos'])) { $hiddenprodutos = 1; }
		else {
			$hiddenprodutos = 0;
		}
		
		configura_template($empresa,$site,$cnpj,$telefone,$id_remetente,$corTitulo,$corLetraTitulo,$corSeparador,$corFundo,$corRodape,$corLetraRodape,$corBorda,$corP1,$corP2,$corP3,$corP4,$Frasedomeio,$corFundoFrasedomeio,$banner,$hiddenprodutos);
		$conexao->close();
	}
	header('location: ../index.php?url=template');
}
?>