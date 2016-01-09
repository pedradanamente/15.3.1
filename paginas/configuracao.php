<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
?>
	<div style="height:50px;">
		<img class="fl" src="imagens/painel.png" width="50"/>
		<h1 class="pagina">Configuração</h1>
	</div>
	<hr style="clear:both;"/>
<br/>
<a href="#metodo"><div class="metodo" onclick="openclose_metodo();">Setar Remetente e Método Smtp de envio</div></a>
<div style="display:none;" id ="metodo">
	<fieldset>
		<legend>Escolha o Remetente e Método Smtp de envio</legend>
		<br/>
		<br/>
		<form action="pp/definir_metodo.php" method="post">
			<fieldset style="width:395px;height:90px;float:left;">
				<legend style="margin-bottom:10px;">MÉTODO SMTP</legend>
				<table width="100%">
					<tr class="trDOWN">
						<td align="center"><input type="radio" name="metodoSmtp" id ="smtpGmail" value="smtpGmail" <?php if (metodo()=="smtpGmail") {?> checked <?php } ?>/></td>
						<td align="left" style="padding-left:5px;"><label for="smtpGmail">Smtp do Gmail</label></td>
					</tr>
					<tr class="trDOWN">
						<td align="center"><input type="radio" name="metodoSmtp" id ="Hospedagem" value="Hospedagem" <?php if (metodo()=="Hospedagem") {?> checked <?php } ?>/></td>
						<td align="left" style="padding-left:5px;"><label for="Hospedagem">Smtp da Hospedagem</label></td>
					</tr>
				</table>
			</fieldset>
			<fieldset style="width:395px;height:90px;float:right;">
				<legend>REMETENTE</legend>
				<table>
					<tr>
						<td align="right"> ID REMETENTE:
							<select name="id_remetente">
						<?php
						$stmt = Listar_remetentes();
						$stmt->bind_result($id_remetente,$userid,$login,$remetente);
						if ($stmt) {
							while ($stmt->fetch()) {
						?>
								<option value="<?php echo $id_remetente;?>" <?php if ($id_remetente==template('id_remetente')) {?> selected <?php } ?> ><?php echo $id_remetente; ?></option>
						<?php
							}
							$stmt->close();
						}
						?>
							</select>
						</td>
					</tr>
				</table>
			</fieldset>
			<div style="clear:both;"></div>
			<hr/>
			<div class="fr"><button class="buttonSalvar" name="buttonSalvarMetodo">SALVAR</button></div>
		</form>
	</fieldset>
	<br/>
</div>

<a href="#novo_remetente"><div class="metodo" onclick="openclose_novo_remetente();">Novo remetente</div></a>
<div style="display:none;" id ="novo_remetente">
	<fieldset>
		<legend style="margin-bottom:10px;">Novo remetente</legend>
		<form action="pp/incluir_remetente.php" method="post">
			<?php
			$id_remetente = id_remetente();
			?>
			<input style="display:none;" type="text" name="id_remetente" value="<?php echo $id_remetente; ?>" required/>
			<table>
				<tr class="trUP">
					<th width="20%">ID REMETENTE</th>
					<th width="25%">De</th>
					<th width="30%">E-mail remetente</th>
					<th width="10%">Smtp login</th>
					<th width="5%">Senha</th>
					<th width="10%">Ação</th>
				</tr>
				<tr class="trDOWN">
					<td><input style="width:115px;text-align:center;letter-spacing:1px;" type="text" name="id_remetenteShow" maxlength="20" value="<?php echo $id_remetente; ?>" disabled/></td>
					<td><input style="width:125px;" type="text" name="de" maxlength="35" required/></td>
					<td><input style="width:170px;" type="email" name="remetente" placeholder="usuario@dominio.com" maxlength="50" required/></td>
					<td><input style="width:150px;" type="email" name="login" placeholder="usuario@gmail.com" maxlength="50" /></td>
					<td><input style="width:100px;" type="password" name="senha" maxlength="50" /></td>
					<td><button class="buttonAdicionar" name="adicionar_remetente">ADICIONAR</button></td>
				</tr>
			</table>
		</form>
	</fieldset>
	<br/>
</div>

<a href="#listar_remetentes"><div class="metodo" onclick="openclose_listar_remetentes();">Listar remetentes</div></a>
<div style="display:none;" id ="listar_remetentes">
	<fieldset>
		<legend style="margin-bottom:10px;">Lista de remetentes</legend>
			<table>
				<tr class="trUP">
					<th width="15%">ID REMETENTE</th>
					<th width="25%">E-mail remetente</th>
					<th width="25%">Smtp login</th>
					<th width="10%">Ação</th>
				</tr>
<?php
$stmt=Listar_remetentes();
$stmt->bind_result($id_remetente,$userid,$login,$remetente);
if ($stmt) {
	while ($stmt->fetch()) {
?>
				<tr class="trDOWN">
					<td><?php echo $id_remetente; ?></td>
					<td><?php echo $remetente; ?></td>
					<td><?php echo $login; ?></td>
					<td><a href="pp/gets.php?acao=remover_remetente&id=<?php echo $id_remetente; ?>"><button class="buttonRemover" name="remover">REMOVER</button></a></td>
				</tr>
<?php
	}
	$stmt->close();
}
?>
			</table>
	</fieldset>
	<br/>
</div>

<a href="#novo_usuario"><div class="metodo" onclick="openclose_novo_usuario();">Novo usuário</div></a>
<div style="display:none;" id ="novo_usuario">

<?php
if (testaSeAdminOuNao() == 1) {
?>
	<fieldset>
		<legend>Criar novo usuário com permissão para enviar</legend>
		<br/>
		<form action="pp/incluir_usuario.php" method="post">
			<table>
				<tr class="trUP">
					<th width="20%">Usuário</th>
					<th width="20%">Senha</th>
					<th width="40%">e-mail</th>
					<th width="10%">Limite diário</th>
					<th width="10%">Ação</th>
				</tr>
				<tr class="trDOWN">
					<td><input style="background-color:rgba(0,0,0,0);" type="text" name="usuario" maxlength="50" required/></td>
					<td><input style="background-color:rgba(0,0,0,0);" type="password" name="senha" maxlength="50" required/></td>
					<td><input style="background-color:rgba(0,0,0,0);width:245px;" type="email" name="userid" placeholder="usuario@dominio.com" maxlength="100" required/></td>
					<td><input style="background-color:rgba(0,0,0,0);" type="number" name="limite" value="400" maxlength="3" max="400" min="10" required/></td>
					<td><button class="buttonAdicionar" name="adicionar">ADICIONAR</button></td>
				</tr>
			</table>
		</form>
	</fieldset>
<?php
} else {
?>
		<p style="color:gray;padding-left:5px;">Você não tem permissão para criar um novo usuário</p>
		<hr/>
<?php
}
?>
	<br/>
</div>
<a href="#listar_usuarios"><div class="metodo" onclick="openclose_listar_usuarios();">Listar usuários</div></a>
<div style="display:none;" id ="listar_usuarios">
	<fieldset>
		<legend>Lista de usuários com permissão para enviar</legend>
		<br/>
		<table width="100%">
			<tr class="trUP" >
				<th width="20%">Usuário</th>
				<th width="35%">e-mail</th>
				<th width="10%">Limite diário</th>
				<th width="10%">Disponível</th>
				<th width="15%">Total usado</th>
				<th width="10%">Ação</th>
			</tr>
<?php
$stmt=Listar_usuarios();
$stmt->bind_result($id_usuario,$usuario,$user,$limite,$total);
if ($stmt) {
	while ($stmt->fetch()) {
	?>
				<tr class="trDOWN">
					<td><?php echo $usuario; ?></td>
					<td><?php echo $user; ?></td>
					<td><?php echo $limite; ?></td>
					<td><?php echo disponivel($user); ?></td>
					<td><?php echo $total; ?></td>
					<td><a href="pp/gets.php?acao=remover_usuario&id=<?php echo $user; ?>"><button class="buttonRemover" name="remover">REMOVER</button></a></td>
				</tr>
	<?php
	}
	$stmt->close();
}
?>
		</table>
	</fieldset>
	<br/>
</div>
<div style="clear:both;"></div>
<?php
}
?>