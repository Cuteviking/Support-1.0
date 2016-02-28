function init(){
	document.getElementById("print").addEventListener("click", printbutton);
}

function printbutton(){
	window.print();
}

window.addEventListener("load", init);
