<script>
	document.getElementById("JS-Localizar").style.display = "block";
	document.getElementById("menu-localizar").style.fontWeight = "bold";
</script>
<div style="clear:both;padding-top:12px;"></div>
<?php
$email=$_SESSION['9UDQGQPK'];
$sql = $conexao->query("SELECT notas FROM usuarios WHERE email = '$email'");
while($linha =  $sql->fetch_array()) {
	$notas=stripcslashes($linha['notas']);
}
$sql->close();
?>
<p id="resultado"></p>
<div style="float:left;width:675px;">
		<p style="margin-bottom:2px;padding:10px;width:662px;border:1px solid rgba(255,255,255,0.2);background-color:rgba(0,0,0,0.3);letter-spacing:3px;color:yellow;font-weight:bold;"><img style="float:left;margin-left:-5px;margin-top:-3px;margin-right:8px;" src="images/notas.png" width="20"/>QUADRO DE ANOTAÇÕES</p>
		<textarea style="padding:5px;background-color:rgba(0,0,0,0.2);border:1px solid rgba(255,255,255,0.2);color:#FFF;width:672px;" maxlength="2000" rows="10"  onkeyup="salvarnotas();" name="anotacao" id="anotacao"><?php if (!empty($notas)) { echo $notas; } ?></textarea>
		<input type="text" id="em" value="<?php echo $email; ?>" style="display:none;"/>
</div>
<div style="float:right;width:280px;margin-right:-8px;">
	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE status = 'FILA' OR status = 'IDENTIFICADO'");  ?>
	<p class="formLabelStats fl">FILA</p>
	<p class="fl"><input class="formInputStats" type="text" name="1" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE solucao = 'AGUARDANDO CREDITO'");  ?>
	<p class="formLabelStats fl">AGUARDANDO CREDITO</p>
	<p class="fl"><input class="formInputStats" type="text" name="2" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE status = 'ENCAMINHADO' ");  ?>
	<p class="formLabelStats fl">ENCAMINHADO</p>
	<p class="fl"><input class="formInputStats" type="text" name="3" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes  WHERE status = 'FINALIZADO'");  ?>
	<p class="formLabelStats fl">FINALIZADO</p>
	<p class="fl"><input class="formInputStats" type="text" name="4" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE status = 'ARQUIVADO' ");  ?>
	<p class="formLabelStats fl">ARQUIVADO</p>
	<p class="fl"><input class="formInputStats" type="text" name="6" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE solucao = 'SEM GARANTIA' AND status = 'FINALIZADO'");  ?>
	<p class="formLabelStats fl">SEM GARANTIA</p>
	<p class="fl"><input class="formInputStats" type="text" name="5" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE solucao = 'GERADO CREDITO'");  ?>
	<p class="formLabelStats fl">GERADO CREDITO</p>
	<p class="fl"><input class="formInputStats" type="text" name="7" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE solucao = 'REPARO TECNICO'");  ?>
	<p class="formLabelStats fl">REPARO TECNICO</p>
	<p class="fl"><input class="formInputStats" type="text" name="7" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE solucao = 'TROCA DO PRODUTO'");  ?>
	<p class="formLabelStats fl">TROCA DO PRODUTO</p>
	<p class="fl"><input class="formInputStats" type="text" name="7" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE solucao = 'TROCA DE PECA INTERNA'");  ?>
	<p class="formLabelStats fl">TROCA DE PECA INTERNA</p>
	<p class="fl"><input class="formInputStats" type="text" name="7" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE solucao = 'DEVOLUCAO DO PRODUTO'");  ?>
	<p class="formLabelStats fl">DEVOLUCAO DO PRODUTO</p>
	<p class="fl"><input class="formInputStats" type="text" name="7" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE solucao = 'REEMBOLSO DO DINHEIRO'");  ?>
	<p class="formLabelStats fl">REEMBOLSO DO DINHEIRO</p>
	<p class="fl"><input class="formInputStats" type="text" name="7" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE solucao = 'RESOLUCAO INTERNA'");  ?>
	<p class="formLabelStats fl">RESOLUCAO INTERNA</p>
	<p class="fl"><input class="formInputStats" type="text" name="7" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes WHERE solucao = 'TESTADO TUDO OK'");  ?>
	<p class="formLabelStats fl">TESTADO TUDO OK</p>
	<p class="fl"><input class="formInputStats" type="text" name="7" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
	<div style="clear:both;"></div>

	<?php $sql = $conexao->query("SELECT * FROM solicitacoes");  ?>
	<p class="formLabelStats fl">QUANTIDADE TOTAL DE ITENS</p>
	<p class="fl"><input class="formInputStats" type="text" name="8" value="<?php echo $sql->num_rows; ?>" disabled/></p>
	<?php $sql->close(); ?>
</div>
<div style="clear:both;"></div>