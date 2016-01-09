<?php
session_start();
require('../conexao.php');
require('../banco.php');
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	$status = "PENDENTE";
	$userid = $_SESSION['userid'];
	$tarefa = check_input($_POST['tarefa']);
	$prazo = implode( '-', array_reverse( explode( '/', $_POST['prazo'] ) ) );
	
	incluir_tarefa($userid,$tarefa,$prazo,$status);
	header('location: ../index.php?url=tarefas');
}
?>