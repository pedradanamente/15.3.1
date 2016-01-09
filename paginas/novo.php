<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
?>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: "textarea#elm1",
        theme: "modern",
        width: 700,
        height: 200,
        plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
             "save table contextmenu directionality emoticons template paste textcolor"
       ],
       content_css: "css/content.css",
       toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
       style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]
     }); 

function copia() { 
    x = document.getElementById("logingmail").value;
    document.getElementById("from").value = x;
} 
</script>
	<div style="height:50px;">
		<img class="fl" src="imagens/novo.png" width="50"/>
		<h1 class="pagina">Novo (Limite diário disponível: <?php echo disponivel($_SESSION['userid']); ?>)</h1>
	</div>
	<hr style="clear:both;"/>
<?php
	if (disponivel($_SESSION['userid'])>0){
		$contatos=contatos();
	?>
	<a href="#usarTemplate"><div class="metodo" onclick="openclose_usarTemplate();">Enviar mensagem c/ Template</div></a>
	<div style="display:none;" id ="usarTemplate">
		<?php
			include("inc/formulario_usarTemplate.php");
		?>
		<div style="height:15px;"></div>
	</div>
	<a href="#usarHtml"><div class="metodo" onclick="openclose_usarHtml();">Enviar mensagem c/ HTML</div></a>
	<div style="display:none;" id ="usarHtml">
		<?php
			include("inc/formulario_usarHtml.php");
		?>
		<div style="height:15px;"></div>
	</div>
	<a href="#usarFormatacao"><div class="metodo" onclick="openclose_usarFormatacao();">Enviar mensagem usando Formatação</div></a>
	<div style="display:none;" id ="usarFormatacao">
		<?php
			include("inc/formulario_usarFormatacao.php");
		?>
		<div style="height:15px;"></div>
	</div>
	<?php
	}else {
		?>
		<p>Você atingiu o limite diário de envio</p>
		<?php
	}
}
?>