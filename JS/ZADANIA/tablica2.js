function tab()
{
A=[10,2,5,2,4,6,5,2,4,9]; 
 
for (j=0;j<10;j++) 
{m=0; 
 for (i=0;i<10;i++)
   if(A[j]==A[i])
			m++;
 
document.write(A[j] +" powtorzyla sie "+ m + " razy "+"<br>");
}	

}