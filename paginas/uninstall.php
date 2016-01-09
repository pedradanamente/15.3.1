<?php
if (!isset($_SESSION["0CEEHDXM"])||(!isset($_SESSION['userid']))) {
	include("inc/sign_in.php");
}else {
	?>
	<h1>RESETAR FERRAMENTA</h1>
	<p>Esta ferramenta requer uma senha de reset devido a perda de todos os dados contidos, insira a baixo:</p>
	<form action="pp/uninstall.php" method="POST">
		<table>
			<tr>
				<th><input style="height:24px;padding:5px;" type="password" name="k" required/></th>
				<td><button class="buttonUninstall" name="buttonUninstall">CONFIRMAR RESET</button></td>
			</tr>
		</table>
	</form>
<?php
}
?>