<?php
session_start();
if (isset($_SESSION['0CEEHDXM'])) {
	require("conexao.php");
	require("banco.php");
}
?>
<!Doctype html>
<html lang="pt-br">
<head>
	<title>E-mail Marketing</title>
	<meta charset="UTF-8">
	<meta name="author" content="André Silveira Machado" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/andremachado.css"/>
	<script src="js/andremachado.js"></script>
	<script src="js/jquery-1.11.0.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/lightbox.css">
	<script src="js/lightbox.js"></script>
</head>
<body>
	<nav id="fixado">
	<?php if (isset($_SESSION["0CEEHDXM"])) { ?>
		<div class="menu-top">
			<ul>
				<li class="li-upleft fl ">
					<a href="index.php?url=novo">
						<button class="buttonMenuTop <?php if ((isset($_GET['url']))&&($_GET['url']=="novo")) { ?> active <?php } ?>">Novo</button>
					</a>
				</li>
				<li class="li-upleft fl">
					<a href="index.php?url=configuracao">
						<button class="buttonMenuTop <?php if ((isset($_GET['url']))&&($_GET['url']=="configuracao")) { ?> active <?php } ?> ">Configuração</button>
					</a>
				</li>
				<li class="li-upleft fl">
					<a href="index.php?url=template">
						<button class="buttonMenuTop <?php if ((isset($_GET['url']))&&($_GET['url']=="template")) { ?> active <?php } ?> ">Template</button>
					</a>
				</li>
				<li class="li-upleft fl">
					<a href="index.php?url=sent">
						<button class="buttonMenuTop <?php if ((isset($_GET['url']))&&($_GET['url']=="sent")) { ?> active <?php } ?> ">Histórico</button>
					</a>
				</li>
				<li class="li-upleft fl">
					<a href="index.php?url=catalogo">
						<button class="buttonMenuTop <?php if ((isset($_GET['url']))&&($_GET['url']=="catalogo")) { ?> active <?php } ?> ">Catálogo</button>
					</a>
				</li>
				<li class="li-upleft fl">
					<a href="index.php?url=tarefas">
						<button class="buttonMenuTop <?php if (numero_tarefas('PENDENTE')>0) { ?> new <?php } if ((isset($_GET['url']))&&(($_GET['url']=="tarefas")||($_GET['url']=="editar_tarefa"))) { ?> active <?php } ?>">Tarefas: <?php echo numero_tarefas('PENDENTE'); ?></button>
					</a>
				</li>
				<?php
				if ((isset($_GET['url']))&&(isset($_GET['acao']))&&(isset($_GET['opcao']))&&(isset($_POST['metodo']))) {
					if (($_GET['url']=="sending")&&($_GET['acao']=="enviar")) {
					?>
					<li class="li-upleft fl">
						<a href="index.php?url=sending">
							<button class="buttonMenuTop <?php if ((isset($_GET['url']))&&($_GET['url']=="sending")) { ?> active <?php } ?> ">Sending...</button>
						</a>
					</li>
				<?php
					}
				}
				if (isset($_SESSION["0CEEHDXM"])){
				?>
					<li class="li-upright fr">
						<a href="pp/gets.php?acao=sair">
							<button class="buttonMenuTop">SAIR</button>
						</a>
					</li>
				<?php
				}
				?>
			</ul>
		</div>
	<?php } ?>
	</nav>
	<div id="base">
		<div id="conteudo">
			<?php
			if (isset($_GET['url'])) {
				$url = $_GET['url'];
				if (!file_exists("paginas/$url.php")) {
					$url = "404";
				}
			}else {
				$url = "inicial";
			}
			include("paginas/$url.php");
			?>
		</div>
		<footer id="rodape">
			<?php
			if (isset($_SESSION["0CEEHDXM"])) {
				require("mirrors.php");
			?>

			<div class="fl" style="margin-top:2px;font-family:Arial;font-weight:normal;font-size:12px;"><strong>Logado como:</strong> <?php echo $_SESSION['userid']; ?></div>
			<ul>
				<li class="li-upright fr" style="margin-top:5px;">
					<a href="index.php?url=apps">
						<button class="buttonMenuTop <?php if ((isset($_GET['url']))&&($_GET['url']=="apps")) { ?> active <?php } ?> ">APPS</button>
					</a>
				</li>
				<li class="li-upright fr" style="margin-top:5px;">
					<a href="index.php?url=uninstall">
						<button class="buttonMenuTop <?php if ((isset($_GET['url']))&&($_GET['url']=="uninstall")) { ?> active <?php } ?> ">RESETAR FERRAMENTA</button>
					</a>
				</li>
			</ul>
			<div style="clear:both;height:10px;"></div>
			<ul style="margin-left:-7px;">
				<li class="li-upright fl" style="margin-top:5px;">
					<a href="<?php echo $mirror1URL; ?>">
						<button class="buttonMenuTop <?php if ($mirror=="1") { ?> active <?php } ?> ">MIRROR 1</button>
					</a>
				</li>
				<li class="li-upright fl" style="margin-top:5px;">
					<a href="<?php echo $mirror2URL; ?>">
						<button class="buttonMenuTop <?php if ($mirror=="2") { ?> active <?php } ?> ">MIRROR 2</button>
					</a>
				</li>
			</ul>
			<div class="designedby"><hr/>Designed by <strong>André Machado</strong></div>
			<?php } ?>
		</footer>
	</div>
</body>
</html>
<?php
if (isset($_SESSION['0CEEHDXM'])) {
	if ($conexao)
		$conexao->close();
}
?>