function generateXMLHttp() {
	if (typeof XMLHttpRequest != "undefined"){
		return new XMLHttpRequest();
	}
	else{	
	 	if (window.ActiveXObject){
			var versions = ["MSXML2.XMLHttp.5.0", 
		                	"MSXML2.XMLHttp.4.0", 
                        	"MSXML2.XMLHttp.3.0",
		                	"MSXML2.XMLHttp", 
		                	"Microsoft.XMLHttp"
		               		];
		}
	}
	for (var i=0; i<versions.length; i++){
		try{
			return new ActiveXObject(versions[i]);
		}catch(e){}
	}
	alert('Seu navegador não pode trabalhar com Ajax!')
}

function getByIdDelivery() {
	var id      = document.getElementById("id").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "getDataDelivery.php?id=" + id, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function lista(id) {
	//var id      = document.getElementById("id").value;
        
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "insertDataDelivery2.php?id=" + id, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function listaCaixa(id) {
	//var id      = document.getElementById("id").value;
        
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "insertDataCaixa.php?id=" + id, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function insereNome() {
	var nome      = document.getElementById("nome_nota").value;        
	var result  = document.getElementById("result_nome");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "insereNomeNota.php?nome=" + nome, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result_nome.innerHTML = XMLHttp.responseText;
			} else {
				result_nome.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}


function listaMesa(id,mesa) {
	//var id      = document.getElementById("id").value;
        
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "insertDataMesa.php?id=" + id + "&mesa=" + mesa, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function deletaDelivery(id) {
	//var id      = document.getElementById("id").value;
        
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "deleteDataDelivery.php?id_del=" + id, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function deletaMesas(id,mesa) {
	//var id      = document.getElementById("id").value;
        
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "deleteDataMesas.php?id_del=" + id + "&mesa=" + mesa, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function deleta(id) {
	//var id      = document.getElementById("id").value;
        
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "deletaData.php?id_del=" + id, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function processa() {
	var seu_nome = document.getElementById("seu_nome").value;
        var seu_nome2      = document.getElementById("seu_nome2").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "processa.php?seu_nome=" + seu_nome + "&seu_nome2=" + seu_nome2, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function insertDataDelivery(){
	var formInsert   = document.forms[0];
	var fieldsValues = generateFieldsValues(formInsert);
	var result       = document.getElementById("result");
 
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("post", 'insertDataDelivery.php', true);
	XMLHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
 
	XMLHttp.onreadystatechange = function (){
		if(XMLHttp.readyState == 4)
			result.innerHTML = XMLHttp.responseText;
		else
			result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
	};
	XMLHttp.send(fieldsValues);
}

function selecionaMotoboy() {
	var motoboy      = document.getElementById("motoboy").value;
	var moto  = document.getElementById("moto");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "insereMotoboy.php?id=" + motoboy, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				moto.innerHTML = XMLHttp.responseText;
			} else {
				moto.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function insereSabores2() {
	var sabor1      = document.getElementById("course_sabores").value;
	var sabor2      = document.getElementById("course_sabores2").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "recebe_sabores.php?sb1=" + sabor1 + "&sb2=" + sabor2, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function insereSabores3() {
	var sabor1      = document.getElementById("course_sabores").value;
	var sabor2      = document.getElementById("course_sabores2").value;
	var sabor3      = document.getElementById("course_sabores3").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "recebe_3sabores.php?sb1=" + sabor1 + "&sb2=" + sabor2 + "&sb3=" + sabor3, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function insereSaboresDelivery() {
	var sabor1      = document.getElementById("course_sabores").value;
	var sabor2      = document.getElementById("course_sabores2").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "recebe_sabores_delivery.php?sb1=" + sabor1 + "&sb2=" + sabor2, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function relatorioFechamento() {
	// var sabor1      = document.getElementById("course_sabores").value;
	// var sabor2      = document.getElementById("course_sabores2").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "ver_fechamento.php", true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function relatorioFechamentoDinheiro() {
	 var inicio      = document.getElementById("inicial").value;
	 var fim      = document.getElementById("final").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "ver_fechamento_dinheiro.php?inicial=" + inicio + "&final=" + fim, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function relatorioFechamentoDebito() {
	 var inicio      = document.getElementById("inicial").value;
	 var fim      = document.getElementById("final").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "ver_fechamento_debito.php?inicial=" + inicio + "&final=" + fim, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function relatorioFechamentoCredito() {
	 var inicio      = document.getElementById("inicial").value;
	 var fim      = document.getElementById("final").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "ver_fechamento_credito.php?inicial=" + inicio + "&final=" + fim, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}


function insere3SaboresDelivery() {
	var sabor1      = document.getElementById("course_sabores").value;
	var sabor2      = document.getElementById("course_sabores2").value;
	var sabor3      = document.getElementById("course_sabores3").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "recebe_3sabores_delivery.php?sb1=" + sabor1 + "&sb2=" + sabor2 + "&sb3=" + sabor3, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function insereSaboresMesa(mesa) {
	var sabor1      = document.getElementById("course_sabores").value;
	var sabor2      = document.getElementById("course_sabores2").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "recebe_sabores_mesa.php?sb1=" + sabor1 + "&sb2=" + sabor2 + "&mesa=" + mesa, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function insere3SaboresMesa(mesa) {
	var sabor1      = document.getElementById("course_sabores").value;
	var sabor2      = document.getElementById("course_sabores2").value;
	var sabor3      = document.getElementById("course_sabores3").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "recebe_3sabores_mesa.php?sb1=" + sabor1 + "&sb2=" + sabor2 + "&sb3=" + sabor3 + "&mesa=" + mesa, true);
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
			}
	};
	XMLHttp.send(null);
}

function lista_old(){
	var formInsert   = document.forms[0];
	var fieldsValues = generateFieldsValues(formInsert);
	var result       = document.getElementById("result");
 
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("post", 'insertDataDelivery2.php', true);
	XMLHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
 
	XMLHttp.onreadystatechange = function (){
		if(XMLHttp.readyState == 4)
			result.innerHTML = XMLHttp.responseText;
		else
			result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
	};
	XMLHttp.send(fieldsValues);
}

function generateFieldsValues(formInsert){
	var strReturn = new Array();
 
	for(var i=0; i< formInsert.elements.length; i++){
		var str = encodeURIComponent(formInsert.elements[i].name);
		str    += "=";
		str    += encodeURIComponent(formInsert.elements[i].value);
		strReturn.push(str);
	}
	return strReturn.join("&");
}



