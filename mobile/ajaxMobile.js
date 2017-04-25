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

function getById() {
	var id      = document.getElementById("id").value;
	var result  = document.getElementById("result");
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("get", "getData.php?id=" + id, true);
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

function insertData(){
	var formInsert   = document.forms[0];
	var fieldsValues = generateFieldsValues(formInsert);
	var result       = document.getElementById("result");
 
	var XMLHttp = generateXMLHttp();
	XMLHttp.open("post", 'insertData.php', true);
	XMLHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
 
	XMLHttp.onreadystatechange = function (){
		if(XMLHttp.readyState == 4)
			result.innerHTML = XMLHttp.responseText;
		else
			result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
	};
	XMLHttp.send(fieldsValues);
}

function insereMobile(id,categoria) {
	var mesa      = document.getElementById("mesa").value;
	var result  = document.getElementById("result");
	var prods  = document.getElementById("prods");
	var XMLHttp = generateXMLHttp();	
	XMLHttp.open("get", "insereMobile.php?id=" + id + "&categoria=" + categoria + "&mesa=" + mesa, true);	
	XMLHttp.onreadystatechange = function(){
		if (XMLHttp.readyState == 4)
			if (XMLHttp.status == 200){
				result.innerHTML = XMLHttp.responseText;
				// prods.innerHTML = XMLHttp2.responseText;
			} else {
				result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
				// prods.innerHTML = "Um erro ocorreu: " + XMLHttp2.statusText;
			}
	};
	var XMLHttp2 = generateXMLHttp();
	XMLHttp2.open("get", "visualizaMobile.php?id=" + id + "&mesa=" + mesa, true);
	XMLHttp2.onreadystatechange = function(){
		if (XMLHttp2.readyState == 4)
			if (XMLHttp2.status == 200){
				// result.innerHTML = XMLHttp.responseText;
				prods.innerHTML = XMLHttp2.responseText;
			} else {
				// result.innerHTML = "Um erro ocorreu: " + XMLHttp.statusText;
				prods.innerHTML = "Um erro ocorreu: " + XMLHttp2.statusText;
			}
	};
	XMLHttp2.send(null);
	XMLHttp.send(null);
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


