function opinia()
{
document.getElementById('wynik').innerHTML = "<center>Wpisz swoją opinię o naszej aptece:<br /><form name='opiniaklienta' method='post' action='mailto:aa@wp.pl'><textarea rows='5' cols='35'></textarea><br /><input type='submit' value='Wyślij!' />";
}
function okno()
{
window.open('1.jpg', 'ZST', 'toolbar=0,menubar=0,scrollbars=0,resizable=0,status=0,location=0,directories=0,top=20,left=20,height=300,width=400');
}
function kolor1()
{
var styl1;
styl1="<link rel='stylesheet' type='text/css' href='arkusz1.css'>";
document.getElementById("wynik").innerHTML=styl1;
}