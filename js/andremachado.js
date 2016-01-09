/* Página configuracao.php */
function change(numero) {
	var x=document.getElementById("id_remetente");
	x.value=numero;
}

function openclose_metodo() {
	document.getElementById("novo_remetente").style.display = "none";
	document.getElementById("listar_remetentes").style.display = "none";
	document.getElementById("novo_usuario").style.display = "none";
	document.getElementById("listar_usuarios").style.display = "none";
	$( "#metodo" ).toggle("slow", function() {});
}

function openclose_novo_remetente() {
	document.getElementById("metodo").style.display = "none";
	document.getElementById("listar_remetentes").style.display = "none";
	document.getElementById("novo_usuario").style.display = "none";
	document.getElementById("listar_usuarios").style.display = "none";
	$( "#novo_remetente" ).toggle("slow", function() {});
}

function openclose_listar_remetentes() {
	document.getElementById("metodo").style.display = "none";
	document.getElementById("novo_remetente").style.display = "none";
	document.getElementById("novo_usuario").style.display = "none";
	document.getElementById("listar_usuarios").style.display = "none";
	$( "#listar_remetentes" ).toggle("slow", function() {});
}

function openclose_novo_usuario() {
	document.getElementById("metodo").style.display = "none";
	document.getElementById("listar_usuarios").style.display = "none";
	document.getElementById("novo_remetente").style.display = "none";
	document.getElementById("listar_remetentes").style.display = "none";
	$( "#novo_usuario" ).toggle("slow", function() {});
}

function openclose_listar_usuarios() {
	document.getElementById("metodo").style.display = "none";
	document.getElementById("novo_usuario").style.display = "none";
	document.getElementById("novo_remetente").style.display = "none";
	document.getElementById("listar_remetentes").style.display = "none";
	$( "#listar_usuarios" ).toggle("slow", function() {});
}

/* Página novo.php */
function openclose_usarHtml() {
	document.getElementById("usarHtml").style.display = "block";
	document.getElementById("usarTemplate").style.display = "none";
	document.getElementById("usarFormatacao").style.display = "none";
}
function openclose_usarTemplate() {
	document.getElementById("usarTemplate").style.display = "block";
	document.getElementById("usarHtml").style.display = "none";
	document.getElementById("usarFormatacao").style.display = "none";
}
function openclose_usarFormatacao() {
	document.getElementById("usarFormatacao").style.display = "block";
	document.getElementById("usarHtml").style.display = "none";
	document.getElementById("usarTemplate").style.display = "none";
}

/* Página template.php */
function openclose_template() {
	$( "#template" ).toggle("slow", function() {});
	document.getElementById("pre").style.display = "none";
	document.getElementById("produtos").style.display = "none";
}
function openclose_pre() {
	$( "#pre" ).toggle("slow", function() {});
	document.getElementById("template").style.display = "none";
	document.getElementById("produtos").style.display = "none";
}
function openclose_produtos() {
	$( "#produtos" ).toggle("slow", function() {});
	document.getElementById("template").style.display = "none";
	document.getElementById("pre").style.display = "none";
}

/* Página sign_in.php */
function openclose_signIn() {
	$( "#signIn" ).toggle("slow", function() {});
}


/* Página tarefas.php */
function openclose_tarefasOK() {
	$( "#tarefasOK" ).toggle("slow", function() {});
}
function openclose_tarefasNOVO() {
	$( "#tarefasNOVO" ).toggle("slow", function() {});
}

/* Página catalogo.php */
function openclose_catalogoOK() {
	$( "#catalogoOK" ).toggle("slow", function() {});
}
function openclose_catalogoNOVO() {
	$( "#catalogoNOVO" ).toggle("slow", function() {});
}