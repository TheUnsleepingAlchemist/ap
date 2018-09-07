function zad1()
{
a=document.getElementById('p1').value;
b=document.getElementById('p2').value;
c=document.getElementById('p3').value;

if (a>b)
	if (a>c)
	document.getElementById('w').innerHTML="max = a= " + a;
	else
	document.getElementById('w').innerHTML="max = c= " + c;
else
	if (b>c)
	document.getElementById('w').innerHTML="max = b= " + b;
	else
	document.getElementById('w').innerHTML="max = c= " + c;
}

function zad2()
{
document.write("<br>");	
n=10;
	while (n>0)
		{document.write("*");
		 n--;
		}	
}


function zad3()
{
document.write("<br>");		

	for ( n=10;  n>0 ; n-- )
		{document.write("*<br>");}
	
}

function zad4()
	{
		
		for ( n=10; n>0; n--)
		{	for (m=12 ; m>0 ; m--)
			{document.write("*");
			}
		   document.write("<br />");
		}
	}






