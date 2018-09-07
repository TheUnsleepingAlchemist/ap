function Dzisiaj() {
	var dzisiaj = new Date();
	document.getElementById('stopka').innerHTML = "<br /><br />Grzesiek Hawliczek<br />" + dzisiaj.getDate() + "." + (dzisiaj.getMonth()+1) + "." + dzisiaj.getFullYear() + "r.";
}