<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	if (isset($_POST['enviar'])) {
		if (!empty($_POST['id'])){
			Editar_contato($_POST['id'],check_input($_POST['email']),check_input($_POST['nome']));
		}
	}
	?>
	<h1>Editar Contato</h1>
	<hr/>
	<?php
	$stmt = Carregar_catalogo(check_input($_GET['id']));
	$stmt->bind_result($email,$nome,$arquivo);
	if ($stmt) {
		?>
		<?php
		if ($stmt->num_rows==1) {
			while ($stmt->fetch()) {
				//carrega variaveis
			}
		?>
	<form action="" method="POST" enctype="multipart/form-data">
		<input style="display:none;" name="id" value="<?php echo $_GET['id']; ?>" required/>
		<div style="float:left;width:100px;">
			<img style="border:1px solid gray;" src="uploads/<?php echo $arquivo; ?>" width="120" height="120"/>
		</div>
		<div style="float:left;margin-left:40px;">
		<table class="tableTamanhoFOTO">
			<tr class="trUP">
				<th width="10%">ID</th>
				<th width="50%">E-MAIL</th>
				<th width="40%">NOME</th>
			</tr>
			<tr class="trDOWN">
				<td><p style="width:50px;"><?php echo $_GET['id']; ?></p></td>
				<td><input style="width:440px;background-color:rgba(0,0,0,0);" maxlength="80" type="email" name="email" value="<?php echo $email; ?>" autofocus required/></td>
				<td><input style="text-align:center;width:200px;background-color:rgba(0,0,0,0);" type="text" maxlength="50" name="nome" value="<?php echo $nome; ?>" required/></td>
			</tr>
			<tr>
				<td colspan="3"><input type="file" name="arquivo"/></td>
			</tr>
		</table>
		</div>
		<div style="clear:both;"></div>
		<hr/>
		<button class="buttonSalvar fr" name="enviar">SALVAR</button>
	</form>
		<a href="index.php?url=catalogo"><button style="margin-right:10px;background-color:rgba(0,0,0,0.5);color:rgba(255,255,255,0.8);" class="buttonSalvar fr" name="enviar">VOLTAR</button></a>
		<div style="clear:both;"></div>
<?php
		}else {
			?>
			<p>Contato não encontrado!</p>
			<?php
		}
		$stmt -> close();
	}
}
?>
