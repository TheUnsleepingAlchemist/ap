<?php
	require_once('rozne.php');
	
	function pokaz_ksiazki($ksiazki)
	{
		echo
		'<form action="koszyk.php" method="post">
			<table>
				<tr>
					<th>Tytuł</th><th>Autor</th><th>ISBN</th><th>Cena (zł)</th><th>Stan (sztuk)</th><th>Kupuję</th><th>Sztuk</th>
				</tr>';
				if (count($ksiazki)>0)
				{
					$i=-1;
					foreach($ksiazki as $ksiazka)
					{
						$i++;
						echo
						'<tr>
							<td>'
								.$ksiazka['tytul'].'
							</td>
							<td>'
								.$ksiazka['autor'].'
							</td>
							<td>'
								.$ksiazka['isbn'].'
							</td>
							<td>'
								.$ksiazka['cena'].'
							</td>
							<td>'
								.$ksiazka['stan'].'
							</td>
							<td>
							 <input type="checkbox" name="ksiazki[]" value="'.$ksiazka['isbn'].'" />
							</td>
							<td>
							 <input type="number" name="sztuk'.$i.'" style="width:50px;" />
							</td>
						</tr>';
					}
				}
			echo
			'</table>
			
			<input type="submit" name="do_koszyka" value="Wrzuć do koszyka zaznaczone książki"  style="margin-left:10px;" />
		</form>';
	}
	

?>