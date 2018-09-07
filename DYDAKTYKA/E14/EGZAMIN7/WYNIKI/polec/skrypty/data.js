function Dzisiaj() {
	var d = new Date();
	document.getElementById('stopka').innerHTML = "Autor: Michał Połeć<br />" + d.getDate() + "." + (d.getMonth()+1) + "." + d.getFullYear();
}