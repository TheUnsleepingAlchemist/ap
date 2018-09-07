	var nazwy_mies = [ 'Styczeñ', 'Luty', 'Marzec', 'Kwiecieñ', 'Maj', 
    'Czerwiec', 'Lipiec', 'Sierpieñ', 'Wrzesieñ', 'PaŸdziernik', 
    'Listopada', 'Grudzieñ' ];
 

var data = new Date();
var rok = data.getFullYear();
var mies = data.getMonth();
var dzien = data.getDate();
var godz = data.getHours();
var min = data.getMinutes();
var sec = data.getSeconds();
 

if (min < 10)
    min = '0' + min;
if (sec < 10)
    sec = '0' + sec;
 

var data_i_czas = dzien + ' ' + nazwy_mies[mies] + ' ' + rok 
    + ', ' + godz + ':' + min + ':' + sec;
 
document.write(data_i_czas);