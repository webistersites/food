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

function insertDataDeliverySabores(){
	var formInsert   = document.forms[0];
	var fieldsValues = generateFieldsValues(formInsert);
	var result       = document.getElementById("result");
 
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("post", 'recebe_sabores.php', true);
	XMLHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
 
	XMLHttp.onreadystatechange = function (){
		if(XMLHttp.readyState == 4)
			result.innerHTML = XMLHttp.responseText;
		else
			result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
	};
	XMLHttp.send(fieldsValues);
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


