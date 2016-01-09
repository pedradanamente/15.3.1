<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	if (isset($_POST['enviar'])) {
		if (!empty($_POST['id']))
			Editar_tarefa($_POST['id'],check_input($_POST['tarefa']),implode('-', array_reverse(explode( '/',$_POST['prazo']))));
	}
	?>
	<h1>Editar Tarefa</h1>
	<hr/>
	<?php
	$stmt = Carregar_tarefa(check_input($_GET['id']));
	$stmt->bind_result($tarefa,$prazo);
	if ($stmt) {
		?>
		<?php
		if ($stmt->num_rows==1) {	
			while ($stmt->fetch()) {
				//carrega variaveis
				$prazo = implode( '/',array_reverse(explode('-',$prazo )));
			}
		?>
	<form action="" method="POST">
		<input style="display:none;" name="id" value="<?php echo $_GET['id']; ?>" required/>
		<table class="tableTamanho">
			<tr class="trUP">
				<th width="10%">ID</th>
				<th width="70%">TAREFA</th>
				<th width="20%">PRAZO</th>
			</tr>
			<tr class="trDOWN">
				<td> <?php echo $_GET['id']; ?></td>
				<td><input style="width:615px;background-color:rgba(0,0,0,0);" maxlength="80" type="text" name="tarefa" value="<?php echo $tarefa; ?>" autofocus required/></td>
				<td><input style="text-align:center;width:95%;background-color:rgba(0,0,0,0);" type="text" maxlength="10" name="prazo" value="<?php echo $prazo; ?>" required/></td>
			</tr>
		</table>
		<hr/>
		<button class="buttonSalvar fr" name="enviar">SALVAR</button>
	</form>
		<a href="index.php?url=tarefas"><button style="margin-right:10px;background-color:rgba(0,0,0,0.5);color:rgba(255,255,255,0.8);" class="buttonSalvar fr" name="enviar">VOLTAR</button></a>
		<div style="clear:both;"></div>
<?php
		}else {
			?>
			<p>Tarefa não encontrada!</p>
			<?php
		}
		$stmt -> close();
	}
}
?>
