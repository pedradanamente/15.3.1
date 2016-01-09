<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
?>
	<div style="height:50px;">
		<img class="fl" src="imagens/template.png" width="50"/>
		<h1 class="pagina">Template (de HTML)</h1>
	</div>
	<hr style="clear:both;"/>
<a href="#template"><div class="metodo" onclick="openclose_template();">Definições do Template</div></a>
<div style="display:none;" id ="template">
	<fieldset>
		<legend style="margin-bottom:10px;">Definições e cores do Template</legend>
		<form action="pp/salvar_template.php" method="post">
			<div>
				<table>
					<tr>
						<td> Escolha o Remetente p/ carregar quando enviar com o template:
							<select name="id_remetente">
			<?php
			$stmt=Listar_remetentes();
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
			</div>
			<hr/>
			<div class="fl">
				<table>
					<tr>
						<td>Empresa</td>
						<td><input style="width:350px;" type="text" name="empresa" maxlength="50" value="<?php echo template('empresa'); ?>" required/></td>
					</tr>
					<tr>
						<td>Site</td>
						<td><input style="width:350px;" type="text" name="site" maxlength="50" value="<?php echo template('site'); ?>" required/></td>
					</tr>
					<tr>
						<td>Telefone</td>
						<td><input style="width:350px;" type="text" name="telefone" maxlength="50" value="<?php echo template('telefone'); ?>" required/></td>
					</tr>
					<tr>
						<td>Cnpj</td>
						<td><input style="width:350px;" type="text" name="cnpj" maxlength="50" value="<?php echo template('cnpj'); ?>"/></td>
					</tr>
					<tr>
						<td>Banner Url 765</td>
						<td><input style="width:350px;" type="text" name="banner" maxlength="255" value="<?php echo template('banner'); ?>" required/></td>
					</tr>
				</table>
				<hr/>
				<table>
					<tr>
						<td>Frase do meio:</td></tr>
					<tr>
						<td><textarea style="background-color:rgba(0,0,0,0.5);border:1px solid rgba(255,255,255,0.3);padding:5px;color:lightblue;width:440px;height:100px;" name="Frasedomeio" required><?php echo template('Frasedomeio'); ?></textarea></td>
					</tr>
				</table>
				<hr/>
				<div style="margin-top:15px;clear:both;">
					<input style="float:left;" type="checkbox" id="hiddenprodutos" name="hiddenprodutos" <?php if (template('hiddenprodutos')==1) { ?>checked<?php } ?>/>
					<label for ="hiddenprodutos"><p style="float:left;margin-top:3px;">Marque p/ não incluir os produtos no corpo do e-mail</p></label>
				</div>
				<div style="margin-top:15px;margin-left:5px;clear:both;">
				<hr/>
					<p style="float:left;">Selecione um Tema:</p>
					<select style="margin-top:5px;padding:5px;border:0px;margin-left:5px;background-color:navy;color:yellow;" id="tema" name="tema">
					<option value="TEMP 001" <?php if (template('tema')=="TEMP 001") { ?>checked<?php } ?>>TEMP 001</option>
					<option value="Besouro Verde" <?php if (template('tema')=="Besouro Verde") { ?>checked<?php } ?>>Besouro Verde</option>
					</select>
				</div>
			</div>
			<div class="fr">
				<a href="http://taciano.pro.br/alunos/andre-machado/page/tabela.html" target="_blank">
					<div style="background-color:#000;color:#FFF;border:1px solid gray;padding:5px;margin:10px 10px 15px -8px;">
						<p style="padding:0px;margin:0px;font-weight:normal;font-size:14px;"><strong>Tabela de cores,</strong> clique para abrir em uma nova aba.</p>
					</div>
				</a>
				<table>
					<tr>
						<td>Background</td>
						<td><input type="text" name="corFundo" maxlength="15" value="<?php echo template('corFundo'); ?>" required/></td>
					</tr>
					<tr>
						<td>Fundo do Título</td>
						<td><input type="text" name="corTitulo" maxlength="15" value="<?php echo template('corTitulo'); ?>" required/></td>
					</tr>
					<tr>
						<td>Letra do Título</td>
						<td><input type="text" name="corLetraTitulo" maxlength="15" value="<?php echo template('corLetraTitulo'); ?>" required/></td>
					</tr>
					<tr>
						<td>Fundo do Campo do meio</td>
						<td><input type="text" name="corFundoFrasedomeio" maxlength="15" value="<?php echo template('corFundoFrasedomeio'); ?>" required/></td>
					</tr>
					<tr>
						<td>Separadores</td>
						<td><input type="text" name="corSeparador" maxlength="15" value="<?php echo template('corSeparador'); ?>" required/></td>
					</tr>
					<tr>
						<td>Fundo do rodapé</td>
						<td><input type="text" name="corRodape" maxlength="15" value="<?php echo template('corRodape'); ?>" required/></td>
					</tr>
					<tr>
						<td>Letra do rodapé</td>
						<td><input type="text" name="corLetraRodape" maxlength="15" value="<?php echo template('corLetraRodape'); ?>" required/></td>
					</tr>
					<tr>
						<td>Borda de Título e rodapé</td>
						<td><input type="text" name="corBorda" maxlength="15" value="<?php echo template('corBorda'); ?>" required/></td>
					</tr>
					<tr>
						<td>Fundo do produto #1</td>
						<td><input type="text" name="corP1" maxlength="15" value="<?php echo template('corP1'); ?>" required/></td>
					</tr>
					<tr>
						<td>Fundo do produto #2</td>
						<td><input type="text" name="corP2" maxlength="15" value="<?php echo template('corP2'); ?>" required/></td>
					</tr>
					<tr>
						<td>Fundo do produto #3</td>
						<td><input type="text" name="corP3" maxlength="15" value="<?php echo template('corP3'); ?>" required/></td>
					</tr>
					<tr>
						<td>Fundo do produto #4</td>
						<td><input type="text" name="corP4" maxlength="15" value="<?php echo template('corP4'); ?>" required/></td>
					</tr>
				</table>
			</div>
			<div style="clear:both;padding-top:25px;"><hr/></div>
			<div class="fr"><button class="buttonSalvar" name="buttonSalvarTemplate">SALVAR DEFINIÇÕES</button></div>
		</form>
	</fieldset>
	<br/>
</div>
<a href="#produtos"><div class="metodo" onclick="openclose_produtos();">Editar produtos</div></a>
<div style="display:none;" id ="produtos">
	<div style="width:835px;background-color:rgba(0,0,0,0);border:0px;padding:15px;">
		<div style="margin:0 auto;width:800px;border:1px; solid yellow">
		<form action="pp/salvar_produtos.php" method="POST" enctype="multipart/form-data">
		<?php
		for($i=1;$i<=4;$i++){
			$I="I0"."$i";
			$U="U0"."$i";
			$T="T0"."$i";
			$P="P0"."$i";
			$D="D0"."$i";
		?>
			<fieldset style="margin-bottom:10px;">
				<legend>PRODUTO #0<?php echo $i; ?></legend>
				<div style="float:left;width:80px;padding-top:5px;">
					<img src="produtos/<?php echo template($I); ?>" width="75" height="95"/>
				</div>
				<div style="float:left;width:400px;">
					<table>
						<tr>
							<td><input type="file" name="<?php echo $I; ?>"/></td>
							<td><input style="width:250px;" type="text" name="<?php echo $T; ?>" value="<?php echo template($T); ?>"/></td>
							<td align="right"><input style="width:75px;" type="text" name="<?php echo $P; ?>" value="<?php echo template($P); ?>"/></td>
						</tr>
						<tr>
							<td colspan="3" align="right"><textarea style="background-color:rgba(0,0,0,0.5);border:1px solid rgba(255,255,255,0.3);padding:5px;color:lightblue;width:680px;height:100px;" name="<?php echo $D; ?>"><?php echo template($D); ?></textarea></td>
						</tr>
						<tr>
							<td colspan="3" align="right"><input style="width:677px;" type="text" name="<?php echo $U; ?>" value="<?php echo template($U); ?>"/></td>
						</tr>
					</table>
				</div>
			</fieldset>
		<?php
		}
		?>
			<div style="padding:1px;">
				<button class="buttonSalvar fr" name="SalvarP">SALVAR PRODUTOS</button>
				<div style="clear:both;"></div>
			</div>
			<hr style="clear:both;"/>
		</form>
		</div>
	</div>
</div>
<a href="#pre"><div class="metodo" onclick="openclose_pre();">PREVIEW DO TEMPLATE</div></a>
<div style="display:none;" id ="pre">
	<div style="width:835px;background-color:rgba(0,0,0,0);border:0px;padding:15px;">
		<div style="margin:0 auto;width:800px;border:1px; solid yellow">
		<?php
		include("inc/htmlT.php");
		echo $htmlT;
		?>
		</div>
	</div>
</div>
<div style="clear:both;"></div>
<?php
}
?>