<?php
if((!isset($usuario))||($page=="signup")) { ?>
	<?php session_destroy(); ?>
	<p style="color:yellow;padding-top:10px;"><strong>Você está sendo redirecionado</strong></p>
	<script>location.href="index.php";</script>
<?php
}else { ?>
<p class="title"><strong>ERRO 404</strong> PÁGINA NÃO ENCONTRADA</p>
<?php
} ?>