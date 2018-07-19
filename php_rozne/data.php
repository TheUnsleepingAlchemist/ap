<?php
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 dni; 24 godziny; 60 minut; 60 sekund
echo 'Teraz:       '. date('Y-m-d') ."\n";
echo 'Za tydzieñ: '. date('Y-m-d', $nextWeek) ."\n";
echo "<br>";

echo rand(1,20);
?>