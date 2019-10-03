/* Piotr Miernik */

function wypisz()
{
    var m=document.getElementById("m").value;
    var napis="*";
    var i=0;
    
    for(i=0; i<m; i++)
    {
        
       document.write(napis);
       document.write("<br />");
       
       napis=napis+" *";
    }
    
}