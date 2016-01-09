<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	?>
	<div style="height:50px;">
		<img class="fl" src="imagens/historico.png" width="50"/>
		<h1 class="pagina">Histórico</h1>
	</div>
	<hr style="clear:both;"/>
	<div>
	<?php
	$stmt = Listar_historico("5000");
	$stmt->bind_result($id_remetente,$id_email,$datanovo,$metodo,$empresa,$destinatario,$status);
	?>
	<?php	
	if ($stmt) {
		if ($stmt->num_rows>0){
	?>
		<table class="tableTamanho">
			<tr class="trUP">
				<th width="10%">NÚMERO</th>
				<th width="10%">ID REMET.</th>
				<th width="10%">DATA</th>
				<th width="10%">MÉTODO</th>
				<th width="20%">EMPRESA</th>
				<th width="35%">DESTINATÁRIO</th>
				<th width="10%"></th>
			</tr>
			<?php
			while ($stmt->fetch()) {
				 $datanovo = implode( '/', array_reverse( explode( '-', $datanovo ) ) );
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
					<td><?php echo $id_email; ?></td>
					<td><?php echo $id_remetente; ?></td>
					<td><?php echo $datanovo; ?></td>
					<td><?php echo $metodo; ?></td>
					<td><?php echo $empresa; ?></td>
					<td><?php echo $destinatario; ?></td>
					<td><?php if ($status=="ENVIADO") { ?> <img style="margin-top:2px;" src="imagens/enviado.png" width="15"/> <?php }else { ?> <img style="margin-top:2px;" src="imagens/falha.png" width="15"/><?php } ?></td>
				</tr>
			<?php
			}
		?>
		</table>
		<?php
		}
		else {
		?>
		<p>Nenhum e-mail enviado para exibir</p>
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
