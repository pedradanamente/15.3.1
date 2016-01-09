<?php
$diretorio = "http://scripting.com.br/app/envio";

$PARTE1 = '
<div style="width:768px;padding:15px;background-color:'.template("corFundo").';margin:0 auto;">
	<div style="clear:both;margin-left:0px;text-align:center;width:735px;margin-bottom:10px;font-family:Arial;height:100px;border:1px solid '.template("corBorda").';background-color:'.template("corTitulo").';font-size:40px;color:'.template("corLetraRodape").';padding:15px;">
		<div style="float:left;width:200px;">
			<img src="'.$diretorio.'/imagens/oferta.png" width="200" height="100"/>
		</div>
		<div style="float:left;padding-top:25px;width:500px;">
			<a style="color:#FFF;text-decoration:none;" href="'.template("site").'"><strong>'.template("empresa").'</strong></a>
		</div>
	</div>
	<div style="background-color:rgba(0,0,0,0);border:0px;">
		<a style="color:#FFF;text-decoration:none;" href="'.template("site").'"><img style="border:1px solid rgba(0,0,0,0.2);" src="'.template("banner").'" width="765"/></a>
		<p style="margin:2px 0;text-align:center;background-color:'.template("corFundoFrasedomeio").';width:765px;border:1px solid rgba(0,0,0,0.2);padding:5px 0;color:#FFF;font-size:14px;font-family:Arial;">
			'.template("Frasedomeio").'
		</p>
		<p style="clear:both;margin:10px 0;text-align:right;"><img src="'.$diretorio.'/imagens/separador.png" /></p>
	</div>
';

$PARTE2 = '
	<div style="background-image:url('.$diretorio.'/produtos/'.template("I01").');text-align:center;float:left;width:250px;border-radius: 5px 20px 5px;font-family:Arial;min-height:150px;border:1px solid rgba(0,0,0,0.2);font-size:14px;color:black;padding:15px;">
		<a style="color:#FFF;text-decoration:none;" href="'.template("U01").'">
			<div style="background-color:'.template("corP1").';background-repeat:repeat;padding:5px;border:1px solid rgba(0,0,0,0.3);">
				<strong>'.template("T01").'</strong>
			</div>
		</a>
	</div>
	<div style="float:left;margin-left:5px;width:458px;font-family:Arial;min-height:180px;border:1px solid rgba(0,0,0,0);background-color:#FFF;font-size:14px;color:#000;padding:0 10px 0 10px;">
		<div style="height:1px;background-color:'.template("corSeparador").';width:100%;"/></div>
		<p>'.template("D01").'</p>
		<p>'.template("P01").'</p>
	</div>
	<div style="clear:both;height:5px;"></div>
	<div style="background-image:url('.$diretorio.'/produtos/'.template("I02").');text-align:center;float:left;width:250px;border-radius: 5px 20px 5px;font-family:Arial;min-height:150px;border:1px solid rgba(0,0,0,0.2);font-size:14px;color:black;padding:15px;">
		<a style="color:#FFF;text-decoration:none;" href="'.template("U02").'">
			<div style="background-color:'.template("corP2").';background-repeat:repeat;padding:5px;border:1px solid rgba(0,0,0,0.3);">
				<strong>'.template("T02").'</strong>
			</div>
		</a>
	</div>
	<div style="float:left;margin-left:5px;width:458px;font-family:Arial;min-height:180px;border:1px solid rgba(0,0,0,0);background-color:#FFF;font-size:14px;color:#000;padding:0 10px 0 10px;">
		<div style="height:1px;background-color:'.template("corSeparador").';width:100%;"/></div>
		<p>'.template("D02").'</p>
		<p>'.template("P02").'</p>
	</div>
	<div style="clear:both;height:5px;"></div>
	<div style="background-image:url('.$diretorio.'/produtos/'.template("I03").');text-align:center;float:left;width:250px;border-radius: 5px 20px 5px;font-family:Arial;min-height:150px;border:1px solid rgba(0,0,0,0.2);font-size:14px;color:black;padding:15px;">
		<a style="color:#FFF;text-decoration:none;" href="'.template("U03").'">
			<div style="background-color:'.template("corP3").';background-repeat:repeat;padding:5px;border:1px solid rgba(0,0,0,0.3);">
				<strong>'.template("T03").'</strong>
			</div>
		</a>
	</div>
	<div style="float:left;margin-left:5px;width:458px;font-family:Arial;min-height:180px;border:1px solid rgba(0,0,0,0);background-color:#FFF;font-size:14px;color:#000;padding:0 10px 0 10px;">
		<div style="height:1px;background-color:'.template("corSeparador").';width:100%;"/></div>
		<p>'.template("D03").'</p>
		<p>'.template("P03").'</p>
	</div>
	<div style="clear:both;height:5px;"></div>
	<div style="background-image:url('.$diretorio.'/produtos/'.template("I04").');text-align:center;float:left;width:250px;border-radius: 5px 20px 5px;font-family:Arial;min-height:150px;border:1px solid rgba(0,0,0,0.2);font-size:14px;color:black;padding:15px;">
		<a style="color:#FFF;text-decoration:none;" href="'.template("U04").'">
			<div style="background-color:'.template("corP4").';background-repeat:repeat;padding:5px;border:1px solid rgba(0,0,0,0.3);">
				<strong>'.template("T04").'</strong>
			</div>
		</a>
	</div>
	<div style="float:left;margin-left:5px;width:458px;font-family:Arial;min-height:180px;border:1px solid rgba(0,0,0,0);background-color:#FFF;font-size:14px;color:#000;padding:0 10px 0 10px;">
		<div style="height:1px;background-color:'.template("corSeparador").';width:100%;"/></div>
		<p>'.template("D04").'</p>
		<p>'.template("P04").'</p>
	</div>
	<div style="clear:both;height:10px;"></div>
';

$PARTE3 = '
	<div style="height:1px;background-color:'.template("corSeparador").';width:100%;"/></div>
	<div style="clear:both;height:10px;"></div>
	<div style="clear:both;margin-left:0px;text-align:center;width:738px;font-family:Arial;color:'.template("corLetraRodape").';height:165px;border:1px solid '.template("corBorda").';background-color:'.template("corRodape").';font-size:14px;padding:15px;">
		<div style="float:left;">
			<p><img src="'.$diretorio.'/imagens/oferta.png" width="200"/ height="100"></p>
		</div>
		<div style="float:right;">
			<p style="text-align:right;"><strong>Telefone:</strong> '.template("telefone").'</p>
			<p style="color:'.template("corLetraRodape").';text-decoration:none;text-align:right;">'.template("site").'</p>
			<p style="text-align:right;">'.template("cnpj").'</p>
			<p style="text-align:right;">'.template("empresa").'</p>
		</div>
		<div style="clear:both;margin:0px;padding:0px;">
			<hr/>
			<a style="color:'.template("corLetraRodape").';text-decoration:none;" href="'.template("site").'"><p><strong>NAO PERCA TEMPO, ACESSE NOSSO SITE E COMPRE COM SEGURANCA<strong></p></a>
		</div>
	</div>
	<a href="'.template("site").'"><p style="color:#000;text-decoration:none;font-size:14px;text-align:right;font-weight:normal;"> '.template("site").'</p></a>
</div>
';
if (template('hiddenprodutos')==0) {
	$htmlT = $PARTE1.$PARTE2.$PARTE3;
}
else {
	$htmlT = $PARTE1.$PARTE3;
}


?>