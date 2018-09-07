var x=prompt("Podaj pierwszą liczbę","");
var y=prompt("Podaj drugą liczbę","");

if (x<y) { 
	for (a=x; a<=y; a++)
	document.write(a+", ");
	}
else if (x>y) { 
	for (a=y; a<=x; a++)
	document.write(a+", ");
	}
else {
	document.write(" Różnica między liczbami jest mniejsza od jedności.");
	}
