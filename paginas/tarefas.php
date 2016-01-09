<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	?>
	<div style="height:50px;">
		<img class="fl" src="imagens/tarefas.png" width="50"/>
		<h1 class="pagina">Tarefas</h1>
	</div>
	<hr style="clear:both;"/>
	<a href="#tarefasNOVO"><div class="metodo buttonJobOpen" onclick="openclose_tarefasNOVO();">NOVA TAREFA</div></a>
	<div class="quadroNOVO" id ="tarefasNOVO">
			<fieldset style="height:100px;">
				<legend style="font-size:13px;margin-bottom:10px;">Nova Tarefa</legend>
				<form action="pp/incluir_tarefa.php" method="POST">
					<table>
						<tr>
							<th>TAREFA:</th> <td colspan="2"><input style="width:590px;" maxlength="80" type="text" name="tarefa" autofocus required/></td>
						</tr>
						<tr>
							<th>PRAZO:</th> <td><input type="date" maxlength="10" name="prazo" min="<?php echo date('d/m/Y'); ?>" placeholder="<?php echo date('d/m/Y'); ?>" required/></td>
							<td style="text-align:right;"><button class="buttonNewJobOk" name="enviar">CADASTRAR</button></td>
						</tr>
					</table>
				</form>
			</fieldset>
		<div style="height:15px;"></div>
	</div>

	<div class="TituloDeLista1"><img class="fl" src="imagens/pendente.png" width="50"/><strong class="fl">PENDENTE</strong></div>
	<div style="clear:both;padding-top:10px;">
	<?php
	$stmt = Listar_tarefas("PENDENTE","prazo","ASC");
	$stmt->bind_result($id_tarefa,$tarefa,$prazo,$status,$concluida);
	if ($stmt) {
		if ($stmt->num_rows>0){
	?>
		<table class="tableTamanho">
			<tr class="trUP">
				<th width="10%">PRAZO</th>
				<th width="80%">TAREFA</th>
				<th width="10%" colspan="4">AÇÃO</th>
			</tr>
			<?php
			while ($stmt->fetch()) {
				$prazo = implode( '/', array_reverse( explode( '-', $prazo ) ) );
				if (!isset($tr)){
					$tr=1;
			?>
			<tr class="trDOWN_Small color1">
				<?php	
				}
				else {
				?>
			<tr class="trDOWN_Small color2">
				<?php
					unset($tr);
				}
				?>
					<td><?php echo $prazo; ?></td>
					<td style="text-align:left;padding-left:5px;"><?php echo $tarefa; ?></td>
					<td><a href="pp/gets.php?acao=concluir_tarefa&id=<?php echo $id_tarefa; ?>"><img alt="Concluir Tarefa" title="Concluir Tarefa" src="imagens/concluir.png" height="20px;"/></a></td>	
					<td><a href="pp/gets.php?acao=excluir_tarefa&id=<?php echo $id_tarefa; ?>"><img alt="Excluir Tarefa" title="Excluir Tarefa" src="imagens/excluir.png" height="20px;"/></a></td>	
					<td><a href="index.php?url=editar_tarefa&id=<?php echo $id_tarefa; ?>"><img alt="Editar Tarefa" title="Editar Tarefa" src="imagens/editar.png" height="20px;" /></a></td>
				</tr>
			<?php
			}
			?>
		</table>
		<?php
		}else {
		?>
			<p>Nenhuma tarefa para exibir</p>
		<?php
		}
	}
	$stmt -> close();
		?>
	</div>

	<br/>
	<hr/>

	<a href="#tarefasOK"><div class="metodo" onclick="openclose_tarefasOK();">LISTAR TAREFAS CONCLUÍDAS</div></a>
	<div style="display:none;" id ="tarefasOK">
	<?php
	$stmt = Listar_tarefas("CONCLUIDA","concluida","DESC");
	$stmt->bind_result($id_tarefa,$tarefa,$prazo,$status,$concluida);
	if ($stmt) {
		if ($stmt->num_rows>0){
	?>
		<table class="tableTamanho">
			<tr class="trUP">
				<th width="10%">DATA</th>
				<th width="80%">TAREFA</th>
				<th width="10%" colspan="4">AÇÃO</th>
			</tr>
			<?php
			while ($stmt->fetch()) {
				$concluida = implode( '/', array_reverse( explode( '-', $concluida ) ) );
				if (!isset($tr)){
					$tr=1;
			?>
			<tr class="trDOWN_Small color1">
				<?php	
				}
				else {
				?>
			<tr class="trDOWN_Small color2">
				<?php
					unset($tr);
				}
				?>
					<td><?php echo $concluida; ?></td>
					<td style="text-align:left;padding-left:5px;"><?php echo $tarefa; ?></td>
					<td><a href="pp/gets.php?acao=renew_tarefa&id=<?php echo $id_tarefa; ?>"><img alt="Renovar Tarefa" title="Renovar Tarefa" src="imagens/renew.png" height="20px;"/></a></td>	
					<td><a href="pp/gets.php?acao=excluir_tarefa&id=<?php echo $id_tarefa; ?>"><img alt="Excluir Tarefa" title="Excluir Tarefa" src="imagens/excluir.png" height="20px;"/></a></td>	
					<td><a href="index.php?url=editar_tarefa&id=<?php echo $id_tarefa; ?>"><img alt="Editar Tarefa" title="Editar Tarefa" src="imagens/editar.png" height="20px;" /></a></td>
				</tr>
			<?php
			}
			?>
		</table>
		<?php
		}else {
		?>
		<p>Nenhuma tarefa para exibir</p>
		<?php
		}
		$stmt -> close();
	}
		?>
	</div>

	<div style="clear:both;"></div>
<?php
}
?>
