<?php
session_start();
require("../conexao.php");
require('../banco.php');
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION["userid"]))) {
	include("inc/sign_in.php");
}else {
	
	if ($_GET['acao']=="remover_usuario") {
		Remover_usuario(check_input($_GET['id']));
		header('location: ../index.php?url=configuracao');
	}
	if ($_GET['acao']=="remover_remetente") {
		remover_remetente(check_input($_GET['id']));
		header('location: ../index.php?url=configuracao');
	}
	if ($_GET['acao']=="concluir_tarefa") {
		tarefa_mudar_status("CONCLUIDA",check_input($_GET['id']));
		concluir_tarefa(check_input($_GET['id']));
		header('location: ../index.php?url=tarefas');
	}
	if ($_GET['acao']=="renew_tarefa") {
		tarefa_mudar_status("PENDENTE",check_input($_GET['id']));
		header('location: ../index.php?url=tarefas');
	}
	if ($_GET['acao']=="excluir_tarefa") {
		Remover_tarefa(check_input($_GET['id']));
		header('location: ../index.php?url=tarefas');
	}
	if ($_GET['acao']=="excluir_contato") {
		Remover_contato(check_input($_GET['id']));
		header('location: ../index.php?url=catalogo');
	}
	if ($_GET['acao']=="sair") {
		session_destroy();
		header("location: ../index.php");
	}
	$conexao->close();
}
?>