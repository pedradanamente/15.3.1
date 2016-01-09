<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	?>
	<div style="height:50px;">
		<img class="fl" src="imagens/catalogo.png" width="50"/>
		<h1 class="pagina">Catálogo</h1>
	</div>
	<hr style="clear:both;"/>

	<a href="#catalogoNOVO"><div class="metodo buttonJobOpen" onclick="openclose_catalogoNOVO();">NOVO CONTATO</div></a>
	<div class="quadroNOVO" id ="catalogoNOVO">
			<fieldset style="height:150px;">
				<legend style="font-size:13px;margin-bottom:10px;">Novo contato</legend>
				<form action="pp/incluir_contato.php" method="POST" enctype="multipart/form-data">
					<table>
						<tr>
							<th style="text-align:left;">E-MAIL:</th>
							<td colspan="2"><input style="width:590px;" maxlength="100" type="email" name="email" autofocus required/></td>
						</tr>
						<tr>
							<th style="text-align:left;">NOME:</th> <td><input type="text" maxlength="15" name="nome" required/></td>
							<td style="text-align:right;"><button class="buttonNewJobOk" name="enviar">ADICIONAR</button></td>
						</tr>
						<tr>
							<th style="text-align:left;">FOTO:</th>
							<td><input type="file" name="arquivo"/></td>
						</tr>
					</table>
				</form>
			</fieldset>
		<div style="height:15px;"></div>
	</div>

	<div class="TituloDeLista1"><strong>LIVRO DE ENDEREÇOS</strong></div>
	<div>
	<?php
	$stmt = Listar_contatos();
	$stmt->bind_result($id_catalogo,$nome,$email,$arquivo);
	if ($stmt) {
		?>
		<?php
		if ($stmt->num_rows>0) {	
		?>
		<table class="tableTamanho">
			<tr class="trUP">
				<th width="2%"></th>
				<th width="28%">NOME</th>
				<th width="60%">EMAIL</th>
				<th width="10%" colspan="4">AÇÃO</th>
			</tr>
		<?php
			while ($stmt->fetch()) {
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
				<td><?php if ($arquivo != "padrao.jpg") {?><a href="uploads/<?php echo $arquivo; ?>" data-lightbox="lightbox"><img style="margin-bottom:-3px;" src="imagens/fotinha.png" width="20" height="20"/><?php } ?></a></td>
				<td><?php echo $nome; ?></td>
				<td style="text-align:left;padding-left:5px;"><?php echo $email; ?></td>
				<td><a href="index.php?url=novo&enviaremail=<?php echo $email; ?>"><img alt="Enviar e-mail p/ contato" title="Enviar e-mail p/ contato" src="imagens/enviar_email.png" height="20px;"/></a></td>	
				<td><a href="index.php?url=editar_contato&id=<?php echo $id_catalogo; ?>"><img alt="Editar contato" title="Editar contato" src="imagens/editar.png" height="20px;" /></a></td>	
				<td><a href="pp/gets.php?acao=excluir_contato&id=<?php echo $id_catalogo; ?>"><img alt="Excluir contato" title="Excluir contato" src="imagens/excluir.png" height="20px;"/></a></td>
			</tr>
			<?php
			}
			?>
		</table>
		<?php
		}
		else {
		?>
		<p>Nenhum contato para exibir</p>
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
