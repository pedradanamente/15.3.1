<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
?>
<h1>Apps</h1>
<hr/>
<a href="http://app.scripting.com.br/fir"><p>Ferramenta Intranet de RMA</p></a>
<a href="http://app.scripting.com.br/envio"><p>Ferramenta de Envio</p></a>
<a href="http://app.scripting.com.br/jogo-thechinesedragon"><p>Jogo - The Chinese Dragon</p></a>
<?php
}
?>
