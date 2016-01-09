<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
?>
<h1 >Inicial</h1>
<hr/>
<p>Bem vindo a ferramenta de agenda de contatos e tarefas com suporte a envio de e-mail</p>

<?php
}
?>