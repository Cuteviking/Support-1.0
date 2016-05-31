function init(){
	if(document.getElementById("print")){
		document.getElementById("print").addEventListener("click", printbutton);
	}
	window.setInterval(stats, 4000);
}

function printbutton(){
	window.print();
}

function stats(){
	ajax("php/call.php", statsCallback);
}

function statsCallback(XHR){
	console.log(XHR);
	document.getElementById("queue").children[0].innerHTML = XHR["queue"];
	
	document.getElementById("problem").children[0].innerHTML = XHR["problem"];
}

window.addEventListener("load", init);

/*ajax*/
function ajax(url, callback){
	var XHR = null;
	if (XMLHttpRequest) {
		XHR = new XMLHttpRequest();
	} 
	else {
		XHR = new ActiveXObject("Microsoft.XMLHTTP");
	}
	XHR.onreadystatechange = function () {
		if (XHR.readyState == 4 || XHR.readyState == "complete") {
			if (XHR.status == 200) {
				callback(JSON.parse(XHR.responseText));
			} 
			else {
			}
		}
	}
	XHR.open("GET", url, true);
	XHR.send(null);
}