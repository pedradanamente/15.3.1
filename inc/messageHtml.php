<?php
$mensagemHTML = "
	<div style='border:1px solid gray;padding:15px;'>
		<h3 style='padding-top:0px;margin-top:0px;font-family:Verdana;'><a style='text-decoration:none;' href='http://www.rmacellsystem.tk'>RMA CELLSYSTEM</a></h3>
		<hr/>
		<p style='font-family:Verdana;color:red;font-weight:bold;'>RMA DE CHAVE $chave ESTA FINALIZADO</p>
		<hr/>
		<p style='font-family:Verdana;'>Ordem de Servico: $os</p>
		<p style='font-family:Verdana;'>$tipo</p>
		<p style='font-family:Verdana;'>Fabricante: $fabricante</p>
		<p style='font-family:Verdana;'>Modelo: $modelo</p>
		<p style='font-family:Verdana;'>S/N: $sn</p>
		<p style='font-family:Verdana;'>Solucao: $solucao</p>
		<hr/>
		<p style='font-family:Arial;'>Segue Url para detalhes: <a href='$url'>$url</a></p>
	</div>
";
?>