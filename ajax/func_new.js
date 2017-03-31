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

function getByIdNew() {
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

function insertDataNew(){
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