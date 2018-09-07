
$plik=fopen('dane.txt','r')

do
{
fgets($plik,100);
}
while(!feof($plik));

fgetc($plik) //czyta pojedyncze znaki
fread($plik,32)
readfile($plik)
file_get_contents($plik)
file ($plik)





