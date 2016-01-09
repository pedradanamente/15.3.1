<?php
session_start();
require('../conexao.php');
require('../banco.php');
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	if (!empty($_FILES['arquivo']['name'])){
		$_UP['pasta'] = '../uploads/';
		$_UP['tamanho'] = 1024 * 1024 * 2; // 2MB
		$_UP['extensoes'] = array('jpg');
		$_UP['erros'][0] = 'Não houve erro';
		$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
		$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
		$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
		$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
		if ($_FILES['arquivo']['error'] != 0) {
			die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
			exit;
		}
		$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
		if (array_search($extensao, $_UP['extensoes']) === false) {
			echo "Por favor, envie arquivos com as seguintes extensões: jpg";
		}
		else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
			echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
		}
		else {
			$arquivo = time().'.jpg';
			if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $arquivo))
				echo "Não foi possível enviar o arquivo, tente novamente";
		}
	}else{
		$arquivo="padrao.jpg";
	}
	Incluir_contato(check_input($_POST['nome']),check_input($_POST['email']),$arquivo);
	header('location: ../index.php?url=catalogo');
}
?>