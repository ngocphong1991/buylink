// JavaScript Document

var request, response;

function sendReqPost(url, res){
	var reqObject;
	if(window.XMLHttpRequest){
		reqObject = new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		reqObject = new ActiveXObject("Microsoft.XMLHTTP");
	}
	reqObject.onreadystatechange = processResponse;
	request = reqObject;
	response = res;
	try{
		reqObject.open("POST",url,true);
	}
	catch(ex){
		alert('Error sending request via ajax-engine...');
	}
	reqObject.send(null);
	document.getElementById(response).innerHTML = "Loading...";
}

function sendReqGet(url, res){
	var reqObject;
	if(window.XMLHttpRequest){
		reqObject = new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		reqObject = new ActiveXObject("Microsoft.XMLHTTP");
	}
	reqObject.onreadystatechange = processResponse;
	request = reqObject;
	response = res;
	try{
		reqObject.open("GET",url,true);
	}
	catch(ex){
		alert('Error sending request via ajax-engine...');
	}
	reqObject.send(null);
	document.getElementById(response).innerHTML = "Loading...";
}

function processResponse(){
	if(request.readyState==4){
//		if(request.status==200){
			document.getElementById(response).innerHTML = request.responseText;
/*		}
		else{
			document.getElementById(response).innerHTML = "Error : " + request.statusText;
		}
*/	}
}
