<!-- v 0.1 -->
<head>
	<style>
	.descricao {text-align:center;float:left;width:350px;font-family:Arial;height:100px;border:1px solid green;background-color:white;font-size:40px;color:black;padding:15px;}
	.especificacao {margin-left:3px;float:left;text-align:center;width:350px;font-family:Arial;height:100px;border:1px solid green;background-color:white;font-size:40px;color:black;padding:15px;}
	.empresa {text-align:center;width:735px;margin-bottom:3px;font-family:Arial;height:75px;border:1px solid green;background-color:white;font-size:40px;color:black;padding:15px;}
	</style>
</head>
<div style="width:770px;border:1px solid gray;padding:15px;background-color:green;">
	<div class="empresa">
		<?php echo template("empresa"); ?>
	</div>
	<div class="descricao">
		<?php echo template("descricao_item_01"); ?>
	</div>
	<div class="especificacao">
		DESCRICAO ---> 01
		PREÇO ----> R$ <?php echo template("preco_item_01"); ?>
	</div>
	<div class="descricao">
		<?php echo template("descricao_item_02"); ?>
	</div>
	<div class="especificacao">
		DESCRICAO ---> 02
		PREÇO ----> R$ <?php echo template("preco_item_02"); ?>
	</div>
	<div class="descricao">
		<?php echo template("descricao_item_03"); ?>
	</div>
	<div class="especificacao">
		DESCRICAO ---> 03
		PREÇO ----> R$ <?php echo template("preco_item_03"); ?>
	</div>
	<div class="descricao">
		<?php echo template("descricao_item_04"); ?>
	</div>
	<div class="especificacao">
		DESCRICAO ---> 04
		PREÇO ----> R$ <?php echo template("preco_item_04"); ?>
	</div>
	<div class="descricao">
		<?php echo template("descricao_item_05"); ?>
	</div>
	<div class="especificacao">
		DESCRICAO ---> 05
		PREÇO ----> R$ <?php echo template("preco_item_05"); ?>
	</div>
	<div class="descricao">
		<?php echo template("descricao_item_06"); ?>
	</div>
	<div class="especificacao">
		DESCRICAO ---> 06
		PREÇO ----> R$ <?php echo template("preco_item_06"); ?>
	</div>
	<div style="clear:both;"><?php echo template("cnpj"); ?> - <?php echo template("telefone"); ?></div>
</div>
