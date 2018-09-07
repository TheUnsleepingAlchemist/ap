	function startujemy()
	{
		wyniki =new Array(10)
		for (i=0;i<10;i++) wyniki[i]=0
		for (i=500;i>0;i--)
		{	
			l=Math.round(Math.random()*10)
			wyniki[l]++
			if (l==0) {p0.size++; p0.value=wyniki[0]}
			if (l==1) {p1.size++; p1.value=wyniki[1]}
			if (l==2) {p2.size++; p2.value=wyniki[2]}
			if (l==3) {p3.size++; p3.value=wyniki[3]}
			if (l==4) {p4.size++; p4.value=wyniki[4]}
			if (l==5) {p5.size++; p5.value=wyniki[5]}
			if (l==6) {p6.size++; p6.value=wyniki[6]}
			if (l==7) {p7.size++; p7.value=wyniki[7]}
			if (l==8) {p8.size++; p8.value=wyniki[8]}
			if (l==9) {p9.size++; p9.value=wyniki[9]}
		
			for (j=0;j<=9;j++)
				if (l==j)
					{pola.elements[j].size++; pola.elements[j].value=wyniki[j]}
			<!-- jeœli by³ formularz to mo¿na odwo³ywaæ siê w pêtli do pól -->
		}
	}