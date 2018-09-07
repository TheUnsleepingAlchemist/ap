function tab()
{
A=[10,2,-5,-2,3,3,-8,2,4,-9]; 

 min=A[0];
 for (i=0;i<10;i++)
	if(min>A[i])
			min=A[i];
document.write("wynik=" + min);	
}