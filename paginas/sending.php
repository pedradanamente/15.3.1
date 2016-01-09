<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	if ((isset($_GET['url']))&&(isset($_GET['acao']))&&(isset($_GET['opcao']))&&(isset($_POST['metodo']))) {
		if (($_GET['url']=="sending")&&($_GET['acao']=="enviar")) {
			error_reporting(1);
			if(!isset($_POST[Submit])) die("Não foi recebido nenhum parâmetro");
			enviar($_POST['metodo'],$_GET['opcao']);
		}
	}
	else {
		?>
		<h1>Sending</h1>
		<hr/>
		<p>Não há nada para enviar</p>
		<div style="clear:both;"></div>
		<?php	
	}
}
?>
