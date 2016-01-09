<?php
/* ----------------------------------------------------- * 
 * DELETE 
-------------------------------------------------------- */
function uninstall(){
	global $conexao;
	$tabelas = array("catalogo","remetente","sent","tarefa","template","usuario");
	foreach ($tabelas as $elemento){
		$comandoSql = "DELETE FROM $elemento";
		$stmt = $conexao->query($comandoSql) or trigger_error("triggererror ".$conexao->error);
	}
}
function Remover_usuario($var){
	global $conexao;

	$comandoSql="SELECT id_usuario FROM usuario WHERE userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s', $var); 
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($id);
	if ($stmt){
		while ($stmt->fetch()){
			//carrega variavel
		}
	}
	$stmt -> close();
	if ((testaSeAdminOuNao() == 1)&&($id!=1)) {
		$comandoSql="DELETE FROM usuario WHERE userid = ?";
		$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
		$stmt->bind_param('s',$var);
		$stmt->execute();
		$stmt->close();

		$comandoSql="DELETE FROM template WHERE userid = ?";
		$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
		$stmt->bind_param('s',$var);
		$stmt->execute();
		$stmt->close();

		$comandoSql="DELETE FROM remetente WHERE userid = ?";
		$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
		$stmt->bind_param('s',$var);
		$stmt->execute();
		$stmt->close();
	}
}
function Remover_tarefa($var){
	global $conexao;
	$userid=$_SESSION['userid'];
	$comandoSql="DELETE FROM tarefa WHERE id_tarefa = ? AND userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('is',$var,$userid);
	$stmt->execute();
	$stmt->close();
}
function Remover_contato($var){
	global $conexao;
	$userid=$_SESSION['userid'];
	$comandoSql="DELETE FROM catalogo WHERE id_catalogo = ? AND userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('is',$var,$userid);
	$stmt->execute();
	$stmt->close();
}
function remover_remetente($var){
	global $conexao;
	
	$comandoSql="DELETE FROM remetente WHERE id_remetente = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('i',$var);
	$stmt->execute();
	$stmt->close();
}
/* ----------------------------------------------------- * 
 * UPDATE 
-------------------------------------------------------- */
function tarefa_mudar_status($status,$id_tarefa){
	global $conexao;
	$comandoSql="UPDATE tarefa SET status = ?
	 WHERE id_tarefa = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('si',$status,$id_tarefa);
	$stmt->execute();
	$stmt->close();
}
function Concluir_tarefa($var){
	global $conexao;
	$comandoSql="UPDATE tarefa SET concluida = ?
	 WHERE id_tarefa = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('si',date('Y-m-d'),$var);
	$stmt->execute();
	$stmt->close();
}
function Editar_tarefa($id_tarefa,$tarefa,$prazo){
	global $conexao;
	$comandoSql="UPDATE tarefa SET tarefa = ?, prazo = ?
		WHERE id_tarefa = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('ssi',$tarefa,$prazo,$id_tarefa);
	$stmt->execute();
	$stmt->close();
}
function Editar_contato($id_catalogo,$email,$nome){
	global $conexao;
	$comandoSql="UPDATE catalogo SET email = ?, nome = ?
		WHERE id_catalogo = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('ssi',$email,$nome,$id_catalogo);
	$stmt->execute();
	$stmt->close();
}
function updateMyTemplate($nomeremetente,$telefone,$cnpj,$site,$assunto) {
	global $conexao;
	$userid = $_SESSION['userid'];
	$comandoSql="UPDATE template SET empresa = ?, telefone = ?, cnpj = ?, site = ?, assunto = ? WHERE userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('ssssss',$nomeremetente,$telefone,$cnpj,$site,$assunto,$userid);
	$stmt->execute();
	$stmt->close();
}
function define_metodo($metodo,$id_remetente){
	global $conexao;
	$userid = $_SESSION['userid'];
	$comandoSql="UPDATE template SET metodo = ?, id_remetente = ? WHERE userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('sis',$metodo,$id_remetente,$userid);
	$stmt->execute();
	$stmt->close;
}

function configura_template($empresa,$site,$cnpj,$telefone,$id_remetente,$corTitulo,$corLetraTitulo,$corSeparador,$corFundo,$corRodape,$corLetraRodape,$corBorda,$corP1,$corP2,$corP3,$corP4,$Frasedomeio,$corFundoFrasedomeio,$banner,$hiddenprodutos){
	global $conexao;
	$userid = $_SESSION['userid'];
	$comandoSql="UPDATE template SET empresa = ?, site = ?, cnpj = ?, telefone = ?, id_remetente = ?, corTitulo = ?, corLetraTitulo = ?, corSeparador = ?, corFundo = ?, corRodape = ?, corLetraRodape = ?, corBorda = ?, corP1 = ?, corP2 = ?, corP3 = ?, corP4 = ?,  Frasedomeio = ?, corFundoFrasedomeio = ?, banner = ?, hiddenprodutos = ? WHERE userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('ssssissssssssssssssis',$empresa,$site,$cnpj,$telefone,$id_remetente,$corTitulo,$corLetraTitulo,$corSeparador,$corFundo,$corRodape,$corLetraRodape,$corBorda,$corP1,$corP2,$corP3,$corP4,$Frasedomeio,$corFundoFrasedomeio,$banner,$hiddenprodutos,$userid);
	$stmt->execute();
	$stmt->close();
}

function salvar_produtos($I01,$U01,$T01,$P01,$D01,$I02,$U02,$T02,$P02,$D02,$I03,$U03,$T03,$P03,$D03,$I04,$U04,$T04,$P04,$D04){
	global $conexao;

	$userid = $_SESSION['userid'];
	$comandoSql="UPDATE template SET 
		I01 = ?, U01 = ?, T01 = ?, P01 = ?, D01 = ?, 
		I02 = ?, U02 = ?, T02 = ?, P02 = ?, D02 = ?,
		I03 = ?, U03 = ?, T03 = ?, P03 = ?, D03 = ?,
		I04 = ?, U04 = ?, T04 = ?, P04 = ?, D04 = ?
		WHERE userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('sssssssssssssssssssss',$I01,$U01,$T01,$P01,$D01,$I02,$U02,$T02,$P02,$D02,$I03,$U03,$T03,$P03,$D03,$I04,$U04,$T04,$P04,$D04,$userid);
	$stmt->execute();
	$stmt->close();
}

function Somar($var){
	global $conexao;
	$userid=$_SESSION['userid'];
	$total=total()+$var;
	$comandoSql="UPDATE usuario SET total = ? WHERE userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('is',$total,$userid);
	$stmt->execute();
	$stmt->close();
}
/* ----------------------------------------------------- * 
 * INSERT 
-------------------------------------------------------- */
function install($id_usuario,$usuario,$senha,$userid,$limite,$id_remetente,$login_smtp,$senha_smtp,$remetente,$id_template) {
	global $conexao;
	$comandoSql="INSERT INTO usuario (id_usuario,usuario,senha,userid,limite)
		VALUES (?,?,?,?,?)";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('isssi',$id_usuario,$usuario,$senha,$userid,$limite);
	$stmt->execute();
	$stmt->close();

	$comandoSql="INSERT INTO remetente (id_remetente,login,senha,remetente,userid)
		VALUES (?,?,?,?,?)";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('issss',$id_remetente,$login_smtp,$senha_smtp,$remetente,$userid);
	$stmt->execute();
	$stmt->close();

	$comandoSql="INSERT INTO template (id_template,userid)
		VALUES (?,?)";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('is',$id_template,$userid);
	$stmt->execute();
	$stmt->close();
}
function incluir_remetente($userid,$login,$senha,$remetente,$id_remetente){
	global $conexao;
	$comandoSql="INSERT INTO remetente (userid,login,senha,remetente,id_remetente)
		VALUES (?,?,?,?,?)";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('ssssi',$userid,$login,$senha,$remetente,$id_remetente);
	$stmt->execute();
	$stmt->close();
}
function incluir_tarefa($userid,$tarefa,$prazo,$status){
	global $conexao;
	$comandoSql="INSERT INTO tarefa (userid,tarefa,prazo,status)
		VALUES (?,?,?,?)";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('ssss',$userid,$tarefa,$prazo,$status);
	$stmt->execute();
	$stmt->close();
}
function incluir_usuario($nome,$senha,$var,$limite){
	global $conexao;
	
	$comandoSql="SELECT userid FROM usuario WHERE userid=?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s',$var); 
	$stmt->execute();
   	$stmt->store_result();
	if ($stmt->num_rows == 0) {
		$stmt->close();
		$comandoSql="INSERT INTO usuario (usuario,senha,userid,limite)
			VALUES (?,?,?,?)";
		$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
		$stmt->bind_param('ssss',$nome,$senha,$var,$limite);
		$stmt->execute();
		$stmt->close();

		Inserir_template_vazio($var);
		Inserir_remetente_padrao($var);
	}
}
function Inserir_template_vazio($var){
	global $conexao;
	
	$comandoSql="INSERT INTO template (userid)
		VALUES (?)";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s',$var);
	$stmt->execute();
	$stmt->close();
}
function Inserir_remetente_padrao($var){
	global $conexao;
	
	$id=1;
	$comandoSql="SELECT login,senha,remetente FROM remetente WHERE id_remetente = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('i', $id);
	$stmt->bind_result($login,$senha,$remetente); 
	$stmt->execute();
	if ($stmt){
		while ($stmt->fetch()){
			//carrega variaveis
		}
	}
	$id_remetente=id_remetente();
	$stmt->close();
	$comandoSql="INSERT INTO remetente (userid,login,senha,remetente,id_remetente)
	VALUES (?,?,?,?,?)";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('ssssi',$var,$login,$senha,$remetente,$id_remetente);
	$stmt->execute();
	$stmt->close();
}
function inserir_email($elemento,$metodo,$empresa,$status) {
	global $conexao;

	$userid=$_SESSION['userid'];
	$id_remetente=template('id_remetente');
	$datanovo=date('Y-m-d');
	$comandoSql="INSERT INTO sent (userid,id_remetente,destinatario,empresa,datanovo,metodo,status)
	 	VALUES(?,?,?,?,?,?,?)";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('sisssss',$userid,$id_remetente,$elemento,$empresa,$datanovo,$metodo,$status);
	$stmt->execute();
	$stmt->close();
}
function Incluir_contato($nome,$elemento,$arquivo) {
	global $conexao;
	$userid=$_SESSION['userid'];
	if (VerificaSeExiste_contato($elemento) == 0){
		$comandoSql="INSERT INTO catalogo (userid,nome,email,arquivo)
			VALUES (?,?,?,?)";
		$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
		$stmt->bind_param('ssss',$userid,$nome,$elemento,$arquivo);
		$stmt->execute();
		$stmt->close();
	}
}
/* ----------------------------------------------------- * 
 * SELECT 
-------------------------------------------------------- */
function VerificaSeExiste_contato($email){
	global $conexao;
	$userid=$_SESSION['userid'];
	$email="%".$email."%";
	$comandoSql="SELECT email FROM catalogo WHERE userid = ? AND email like ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('ss',$userid,$email); 
	$stmt->execute();
	$stmt->store_result();
	$num = $stmt->num_rows;
	$stmt->close();
	return $num;
}
function total(){
	global $conexao;
	$userid=$_SESSION['userid'];
	$comandoSql="SELECT total FROM usuario WHERE userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s',$userid); 
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($total);
	if ($stmt) {
		while($stmt->fetch()){
			//carrega variavel
		}
	}
	$stmt->close();
	return $total;
}
function instalado() {
	global $conexao;
	$contador = 0;
	$var=1;

	$comandoSql="SELECT id_usuario FROM usuario WHERE id_usuario = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('i', $var); 
	$stmt->execute();
	$stmt->store_result();
	if($stmt->num_rows == 1)
		$contador += 1;
	$stmt->close();

	$comandoSql="SELECT id_remetente FROM remetente WHERE id_remetente = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('i', $var); 
	$stmt->execute();
	$stmt->store_result();
	if($stmt->num_rows == 1)
		$contador += 1;
	$stmt->close();

	$comandoSql="SELECT id_template FROM template WHERE id_template = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('i', $var); 
	$stmt->execute();
	$stmt->store_result();
	if($stmt->num_rows == 1) 
		$contador += 1;
	$stmt->close();

	return $contador;
}
function id_remetente() {
	global $conexao;
	do {
		$var = rand(1000,9999);
		$comandoSql="SELECT id_remetente FROM remetente WHERE id_remetente = ?";
		$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
		$stmt->bind_param('i', $var); 
		$stmt->execute();
	}while ($stmt->num_rows == 1);
	return $var;
}
function numero_tarefas($var){
	global $conexao;
	$userid=$_SESSION['userid'];
	$comandoSql="SELECT id_tarefa FROM tarefa WHERE userid = ? AND status = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('ss',$userid,$var); 
	$stmt->execute();
	$stmt->store_result();
	$data=$stmt->num_rows;
	$stmt -> close();
	return $data;
}
function Carregar_tarefa($var){
	global $conexao;
	$userid=$_SESSION['userid'];
	$comandoSql="SELECT tarefa,prazo FROM tarefa WHERE userid = ? AND id_tarefa = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('si',$userid,$var); 
	$stmt->execute();
	$stmt->store_result();
	return $stmt;
}
function Carregar_catalogo($var){
	global $conexao;
	$userid=$_SESSION['userid'];
	$comandoSql="SELECT email,nome,arquivo FROM catalogo WHERE userid = ? AND id_catalogo = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('si',$userid,$var); 
	$stmt->execute();
	$stmt->store_result();
	return $stmt;
}
function Listar_remetentes(){
	global $conexao;
	$userid = $_SESSION['userid'];
	$comandoSql="SELECT id_remetente,userid,login,remetente FROM remetente WHERE userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s', $userid); 
	$stmt->execute();
	$stmt->store_result();
	return $stmt;
}
function Listar_usuarios(){
	global $conexao;
	$comandoSql="SELECT id_usuario,usuario,userid,limite,total FROM usuario ORDER BY usuario ASC";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->execute();
	$stmt->store_result();
	return $stmt;
}
function Listar_contatos(){
	global $conexao;
	$var = $_SESSION['userid'];
	$comandoSql="SELECT id_catalogo,nome,email,arquivo FROM catalogo WHERE userid = ? ORDER BY email ASC";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s', $var); 
	$stmt->execute();
	$stmt->store_result();
	return $stmt;
}
function Listar_tarefas($var,$var2,$var3){
	global $conexao;
	$userid=$_SESSION['userid'];
	$comandoSql="SELECT id_tarefa,tarefa,prazo,status,concluida FROM tarefa WHERE userid = ? AND status = ? ORDER BY $var2 $var3";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('ss',$userid,$var); 
	$stmt->execute();
   	$stmt->store_result();
	return $stmt;
}
function Listar_historico($max){
	global $conexao;
	$userid=$_SESSION['userid'];
	$comandoSql="SELECT id_remetente,id_email,datanovo,metodo,empresa,destinatario,status FROM sent WHERE userid = ? ORDER BY id_email DESC LIMIT $max";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s',$userid); 
	$stmt->execute();
   	$stmt->store_result();
	return $stmt;
}
function template($parametro){
	global $conexao;
	
	$userid=$_SESSION['userid'];
	$comandoSql="SELECT $parametro FROM template WHERE userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s',$userid); 
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($par);
	if ($stmt){
		while ($stmt->fetch()){
			//carrega variavel
		}
	}
	$stmt -> close();
	return $par;
}
function emailremetente(){
	global $conexao;
	
	$id_remetente=template('id_remetente');
	$comandoSql="SELECT remetente FROM remetente WHERE id_remetente = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('i',$id_remetente);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($remetente);
	if ($stmt){
		while ($stmt->fetch()){
			//carrega variavel
		}
	}
	$stmt -> close();
	return $remetente;
}
function remetente($parametro){
	global $conexao;
	
	$userid=$_SESSION['userid'];
	$comandoSql="SELECT $parametro FROM remetente WHERE userid = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s',$userid); 
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($par);
	if ($stmt) {
		while ($stmt->fetch()){
			//carrega variavel
		}
	}
	$stmt -> close();
	return $par;
}
function testaSeAdminOuNao() {
	global $conexao;
	
	$id=1;
	$userid=$_SESSION['userid'];
	$comandoSql="SELECT userid FROM usuario WHERE userid = ? AND id_usuario = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('si',$userid,$id); 
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows>0) {
		$value=1;
	}else {
		$value=0;
	}
	$stmt->close();
	return $value;
}
function disponivel($var){
	global $conexao;
	
	$comandoSql="SELECT limite FROM usuario WHERE userid=?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s',$var); 
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($limite);
	if ($stmt) {
		while ($stmt->fetch()){
			//carrega variavel
		}
	}
	$datanovo=date('Y-m-d');
	$status="ENVIADO";
	$comandoSql="SELECT datanovo FROM sent WHERE datanovo = ? AND userid=? AND status = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('sss',$datanovo,$var,$status);
	$stmt->execute();
	$stmt->store_result();
	$disponivel=$limite-$stmt->num_rows;

	return $disponivel;
}
function contatos(){
	global $conexao;
	$comandoSql="SELECT email FROM catalogo WHERE userid=?";
	$stmt=$conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s',$_SESSION['userid']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows<=400) {
		$stmt->bind_result($email);
		$contatos="";
		if ($stmt) {
		while($stmt->fetch())
			$contatos.="$email\n";
		}
	}
	$stmt->close();
	return $contatos;
}
function autenticacao($userid,$senha) {
	global $conexao;
	$comandoSql="SELECT userid,senha FROM usuario WHERE userid=? AND senha=?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('ss',$userid,$senha); 
	$stmt->execute();
   	$stmt->store_result();
	if ($stmt->num_rows == 1) {
		$stmt->bind_result($userid,$senha);
    		while ($stmt->fetch()) {
			$_SESSION["0CEEHDXM"]=1;
			$_SESSION['userid']=$userid;
		}
	}
	$stmt->close();
}
function metodo(){
	global $conexao;
	
	$userid=$_SESSION['userid'];
	$comandoSql="SELECT metodo FROM template WHERE userid=?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('s',$userid); 
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($metodo);
	if ($stmt) {
		while ($stmt->fetch()){
			//carrega variavel
		}
	}
	return $metodo;	
}
function smtpsenha(){
	global $conexao;
	$id_remetente=template('id_remetente');
	$comandoSql="SELECT senha FROM remetente WHERE id_remetente = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('i',$id_remetente);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($senha);
	if ($stmt) {
		while ($stmt->fetch()){
			//carrega variavel
		}
	}
	$stmt->close();
	return $senha;
}
function smtplogin(){
	global $conexao;
	$id_remetente=template('id_remetente');
	$comandoSql="SELECT login FROM remetente WHERE id_remetente = ?";
	$stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
	$stmt->bind_param('i',$id_remetente);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($login);
	if ($stmt) {
		while ($stmt->fetch()){
			//carrega variavel
		}
	}
	$stmt->close();
	return $login;
}
function uploadImagemDoProduto($name) {
	$uploaddir = "../produtos/"; //diretorio ex: "images/"
	$tamanho_maximo = 3000000; //tamanho máximo do arquivo
	$uploadfile = $uploaddir . $_FILES["$name"]['name'];
	$nomeimagem = "P_".time().$_FILES["$name"]['name'];
	if (move_uploaded_file($_FILES["$name"]['tmp_name'], $uploaddir.$nomeimagem)) {
	    if (($_FILES["$name"]['type']=="image/jpeg")||($_FILES["$name"]['type']=="image/png")||($_FILES["$name"]['type']=="image/gif")) {
	    	//echo "<div><img src='$uploadfile' height='100'/></div>";
	    }
	} else {
		//falha
	}
	return $nomeimagem;
}
function ENVIADO($elemento,$metodo,$nomeremetente){
	global $conexao;
	Somar(1);
	Incluir_contato("",$elemento,"padrao.jpg");
	inserir_email($elemento,$metodo,$nomeremetente,"ENVIADO");
	echo "<div class='ENVIADO'>OK</div>";
}
function FALHA($elemento,$metodo,$nomeremetente){
	global $conexao;
	inserir_email($elemento,$metodo,$nomeremetente,"FALHA");
	echo "<div class='FALHA'>ERRO</div>";
}
function smtpmailer($elemento, $emailremetente, $nomeremetente, $assunto, $message, $metodo) {
        $mail = new PHPMailer();
        $mail->IsSMTP();		// Ativar SMTP
        $mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
        $mail->SMTPAuth = true;		// Autenticação ativada
        $mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
        $mail->Host = 'smtp.gmail.com';	// SMTP utilizado
        $mail->Port = 465;  		// A porta 587 deverá estar aberta em seu servidor
        $mail->Username = smtplogin();
        $mail->Password = smtpsenha();
        $mail->SetFrom($emailremetente, $nomeremetente);
        $mail->Subject = $assunto;
        $mail->Body = $message;
        $mail->AddAddress($elemento);
        $mail->CharSet = "UTF-8";
        //if (isset($_FILES["anexo"]['name'])){
        //	$mail->AddAttachment("anexos"."/".$_FILES["anexo"]["name"]);
    	//}
        $mail->IsHTML(true);
        if (disponivel($_SESSION['userid'])>0) {
	        if($mail->Send()) {
				ENVIADO($elemento,$metodo,$nomeremetente);
				return true;
	        } else {
				FALHA($elemento,$metodo,$nomeremetente);
	            $_SESSION['errorsmtp'] = '<div class="errorsmtp">Mail error: '.$mail->ErrorInfo.'</div>';
				return false;
	        }

        } else {
			FALHA($elemento,$metodo,$nomeremetente);
            $_SESSION['errorsmtp'] = '<div class="errorsmtp">Mail error: Limite atingido!</div>';
			return false;
	    }
}
function enviar($metodo,$op) {
	global $conexao;
	$emailremetente = check_input($_POST['emailremetente']);
	if ($metodo=="Hospedagem") {
		$array_domain=array("@oi.com.br","@gmail.com");
		foreach ($array_domain as $elemento)
			$emailsender = str_replace("$elemento","@127.0.0.1",$emailremetente);
	}
	else if ($metodo=="smtpGmail") {
    		require_once("pp/class.phpmailer.php");
		$emailsender = smtplogin();
	}
	$nomeremetente = check_input($_POST['nomeremetente']);
	$assunto = check_input($_POST['assunto']);
	$para = array();
	$para = explode("\n",check_input($_POST['para']));
	$boundary = "XYZ-".md5(date("dmYis"))."-ZYX";

	$message = "<div style='background-color:#FFF;color:#FFF;font-family:Arial;font-size:10px;'>";
	$message .= "--$boundary" . PHP_EOL;
	//$message .= "Content-Type: text/html; charset='utf-8'" . PHP_EOL;
	$message .= "</div>";
	$message .= "<div style='clear:both;background-color:#FFF;color:#000;'>".opcao("$op")."</div>"; //mensagem
	$message .= "<div style='clear:both;margin-top:25px;margin-bottom:15px;height:1px;background-color:lightblue;width:100%;'></div>";

	/*if (isset($_FILES["anexo"]['name'])){
			echo "Serviço indisponível para manuteção - att andre machado</br>";
			echo var_dump($_FILES["anexo"]["tmp_name"]);
			echo var_dump($_FILES["anexo"]["name"]);
		$path = $_FILES["anexo"]['tmp_name']; 
		$fileType = $_FILES["anexo"]['type']; 
		$fileName = $_FILES["anexo"]['name'];
		$fp = fopen( $path, "rb" ); // abre o arquivo enviado
		$anexo = fread( $fp, filesize( $path ) ); // calcula o tamanho
		$anexo = chunk_split(base64_encode( $anexo )); // codifica o anexo em base 64
		fclose( $fp ); // fecha o arquivo

		$message .= "Content-Type: ". $fileType ."; name=\"". $fileName . "\"" . PHP_EOL;
		$message .= "Content-Transfer-Encoding: base64" . PHP_EOL;
		$message .= "Content-Disposition: attachment; filename=\"". $fileName . "\"" . PHP_EOL;
	}*/
	$message .= "<div style='color:#FFF;font-size:12px;font-weight:normal;font-family:Arial;'> --$boundary </div>" . PHP_EOL;
	imprime_headers($para,$nomeremetente,$emailsender,$emailremetente,$assunto);
	$x=1;
	foreach($para as $elemento) {
		?>
	<div style="color:white;border:1px solid black;padding-left:15px;padding-bottom:0px;background-color:rgba(150,50,50,0.3);font-family:Arial;margin-bottom:5px;font-size:12px;">
		<div style="float:left;padding-top:8px;">
			<?php
			echo "<div class='NUMERO'>$x</div>";
			echo "<div style='float:left;'>$elemento</div>";
			$x++;
			?>
		</div>
		<?php
	if ($metodo == "Hospedagem") {
		$headers = headers($emailsender,$emailremetente,$assunto);
		if (mail($elemento, $assunto, $message, implode("\r\n", $headers), "-r". $emailsender)&&disponivel($_SESSION['userid'])>0)
			ENVIADO($elemento,$metodo,$nomeremetente);
		else
			FALHA($elemento,$metodo,$nomeremetente);
	}
	else if ($metodo == "smtpGmail")
		smtpmailer($elemento, $emailremetente, $nomeremetente, $assunto, $message, $metodo);
		?>
		<div style="clear:both;"></div>
	</div>
		<?php
	}
	?><div class="imprime_msgSent">Terminou! Veja a mensagem que foi enviada:</div><?php
	echo "<div style='font-weight:normal;font-size:12px;font-family:Arial;border:1px solid gray;padding:15px;background-color:#FFF;margin-bottom:5px;'>$message</div>";
	echo "<div style='font-weight:normal;font-size:12px;font-family:Arial;border:1px solid gray;padding:15px;background-color:rgba(255,255,255,0.5);margin-bottom:5px;color:black;'>".htmlentities($message)."</div>";
	if (isset($_SESSION['errorsmtp'])) {
		echo $_SESSION['errorsmtp'];
		unset($_SESSION['errorsmtp']);
	}
}
function opcao($var) {
	global $conexao;
	
	if ($var=="template") {
		updateMyTemplate(check_input($_POST['nomeremetente']),check_input($_POST['telefone']),check_input($_POST['cnpj']),check_input($_POST['site']),check_input($_POST['assunto']));
		include("inc/htmlT.php");
		$message = $htmlT;
	}
	else if ($var=="textarea") {
		$_SESSION['textarea'] = stripslashes($_POST['textarea']); //para repetir exibicao no formulario
		$message = stripslashes($_POST['textarea']);
	}
	return $message;
}
function headers($emailsender,$nomeremetente,$assunto) {
	global $conexao;
	
	$headers   = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/html; charset=UTF-8";
	$headers[] = "From: {$emailsender}";
	$headers[] = "Reply-To: ".str_replace(" ","_",$nomeremetente)."<{$emailremetente}>";
	$headers[] = "Subject: {$assunto}";
	return $headers;
}
function imprime_headers($para,$nomeremetente,$emailsender,$emailremetente,$assunto) {
	global $conexao;
	
	?>
	<div style="color:white;border:1px solid black;padding:15px;background-color:rgba(150,150,150,0.4);font-family:Arial;margin-bottom:5px;font-size:14px;">
		Enviando <?php echo count($para); ?> e-mails, aguarde um instante...
	</div>
	<div style="color:white;border:1px solid black;padding:15px;background-color:rgba(150,250,250,0.4);font-family:Arial;margin-bottom:5px;font-size:14px;">
		De: <?php echo "$nomeremetente"; ?>
	</div>
	<div style="color:white;border:1px solid black;padding:15px;background-color:rgba(150,250,250,0.2);font-family:Arial;margin-bottom:5px;font-size:14px;">
		Remetente: <?php echo "$emailsender"; ?>
	</div>
	<div style="color:white;border:1px solid black;padding:15px;background-color:rgba(150,50,50,0.8);font-family:Arial;margin-bottom:5px;font-size:14px;">
		Reply To: <?php echo "$emailremetente"; ?>
	</div>
	<div style="color:white;border:1px solid black;padding:15px;background-color:rgba(150,50,100,0.4);font-family:Arial;margin-bottom:5px;font-size:14px;">
		Assunto: <?php echo "$assunto"; ?>
	</div>
	<div style="color:white;border:1px solid black;padding:15px;background-color:rgba(150,50,100,0.4);font-family:Arial;margin-bottom:5px;font-size:14px;">
		Anexo: <?php echo var_dump($_FILES['anexo']['name']); ?>
	</div>
	<?php
}
function check_input($data, $problem='') {
	global $conexao;
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	if ($problem && strlen($data) == 0)
	    show_error($problem);
	return $data;
}