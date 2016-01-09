<?php
require("../conexao.php");
require("../banco.php");

if (instalado() == 3) {
	header("location: ../index.php");	
} else {

	if (isset($_POST['instalar'])) {

		$id_usuario=1;
		$usuario=check_input($_POST['usuario']);
		$senha=md5($_POST['senha']);
		$userid=check_input($_POST['userid']);
		$limite=400;

		$id_remetente=1;
		$login_smtp=check_input($_POST['login_smtp']);
		$senha_smtp=check_input($_POST['senha_smtp']);
		$remetente=check_input($_POST['remetente']);

		$id_template=1;

		uninstall();
		install($id_usuario,$usuario,$senha,$userid,$limite,$id_remetente,$login_smtp,$senha_smtp,$remetente,$id_template);
		session_start();
		autenticacao($userid,$senha);

		header("location: ../index.php");	
	}
	?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Instalação</title>
	<style>
	p {font-family:Verdana;font-size:14px;text-align:center;background-color:#ff8c69;height:30px;padding-top:10px;}
	legend {font-family:Verdana;font-size:16px;color:#8b2323;font-weight:bold;}
	th {font-family:Tahoma;font-size:14px;}
	table {width:800px;text-align:center;margin-top:25px;margin:0 auto;}
	fieldset {padding:25px;}
	input {height:30px;width:250px;text-align:center;}
	body {background-color:#fff8dc;}
	tr {height:40px;}
	button {height:30px;width:200px;background-color:#8b2323;color:white;font-weight:bold;border:0px;margin-left:10px;letter-spacing:1px;float:right;}
	button:hover {background-color:gold;color:blue;}
	h1 {text-align:center;}
	</style>
</head>
<body>
	<div style="width:900px;margin:0 auto;">
		<h1>Instalação da Ferramenta</h1>
		<form action="index.php" method="POST">
			<br/>
			<hr/>
			<fieldset>
				<legend>Dados p/ acesso a Ferramenta</legend>
				<p>Aqui vão informações pessoais para administraçao da Ferramenta, são restritas a você</p>
				<table>
					<tr>
						<th width="33%">Nome p/ Identificação</th>
						<th width="33%">Login de acesso (e-mail)</th>
						<th width="33%">Senha</th>
					</tr>
					<tr>
						<td><input type="text" name="usuario" placeholder="(Exemplo:) André" required/></td>
						<td><input type="text" name="userid" placeholder="(Exemplo:) xfce@oi.com.br" required/></td>
						<td><input type="password" name="senha" required/></td>
					</tr>
				</table>
			</fieldset>
			<br/>
			<hr/>
			<fieldset>
				<legend>Dados de configuração p/ envio de e-mails (Smtp do Gmail)</legend>
				<p>É o smtp padrão para todos usuários usarem, mas não saberão a senha</p>
				<table>
					<tr>
						<th width="33%">E-mail remetente (Reply To)</th>
						<th width="33%">Login (e-mail real p/ smtp)</th>
						<th width="33%">Senha</th>
					</tr>
					<tr>
						<td><input type="text" name="remetente" value="lorem@ipsum.com.br" required/></td>
						<td><input type="text" name="login_smtp" value="loremipsum.p@gmail.com" required/></td>
						<td><input type="password" name="senha_smtp" value="empty00!" required/></td>
					</tr>
				</table>
			</fieldset>
			<br/>
			<hr/>
			<button name="instalar">INSTALAR</button>
		</form>
			<a href="../index.php"><button style="margin-top:-8px;">CANCELAR</button></a>
	</div>
	<div style="clear:both;height:30px;"></div>
	<?php
}
?>
</body>
</html>