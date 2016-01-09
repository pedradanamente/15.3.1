<?php
if (isset($_SESSION["message-signup"])) {
	echo "<script>alert('Você esta agora cadastrado!');</script>";
	unset($_SESSION["message-signup"]);
}
else if (isset($_SESSION["message-novo"])) {
	echo "<script>alert('Solicitação de rma foi adicionada!');</script>";
	unset($_SESSION["message-novo"]);
}
else if (isset($_SESSION["message-salvo"])) {
	echo "<script>alert('Informações do rma foram salvas!');</script>";
	unset($_SESSION["message-salvo"]);
}
else if (isset($_SESSION["message-fila"])) {
	echo "<script>alert('RMA POSTO NA FILA');</script>";
	unset($_SESSION["message-fila"]);
}
else if (isset($_SESSION["message-identificado"])) {
	echo "<script>alert('RMA IDENTIFICADO');</script>";
	unset($_SESSION["message-identificado"]);
}
else if (isset($_SESSION["message-encaminhado"])) {
	echo "<script>alert('RMA ENCAMINHADO');</script>";
	unset($_SESSION["message-encaminhado"]);
}
else if (isset($_SESSION["message-finalizado"])) {
	echo "<script>alert('RMA FINALIZADO');</script>";
	unset($_SESSION["message-finalizado"]);
}
else if (isset($_SESSION["message-finalizado_enviado"])) {
	echo "<script>alert('RMA FINALIZADO COM E-MAIL ENTREGUE');</script>";
	unset($_SESSION["message-finalizado_enviado"]);
}
else if (isset($_SESSION["message-arquivado"])) {
	echo "<script>alert('RMA ARQUIVADO');</script>";
	unset($_SESSION["message-arquivado"]);
}
else if (isset($_SESSION["message-deletaUsuario"])) {
	echo "<script>alert('USUARIO DELETADO');</script>";
	unset($_SESSION["message-deletaUsuario"]);
}
else if (isset($_SESSION["message-deletaSolicitacao"])) {
	echo "<script>alert('RMA DELETADO');</script>";
	unset($_SESSION["message-deletaSolicitacao"]);
}
else if (isset($_SESSION["message-deletarAssistencia"])) {
	echo "<script>alert('ASSISTENCIA DELETADA');</script>";
	unset($_SESSION["message-deletarAssistencia"]);
}
else if (isset($_SESSION["message-adicionarAssistencia"])) {
	echo "<script>alert('ASSISTENCIA ADICIONADA');</script>";
	unset($_SESSION["message-adicionarAssistencia"]);
}
else if (isset($_SESSION["message-assistenciaSalva"])) {
	echo "<script>alert('INFORMAÇÃO SALVA!');</script>";
	unset($_SESSION["message-assistenciaSalva"]);
}
else if (isset($_SESSION["message-mudarSenha"])) {
	echo "<script>alert('SENHA ALTERADA!');</script>";
	unset($_SESSION["message-mudarSenha"]);
}
?>