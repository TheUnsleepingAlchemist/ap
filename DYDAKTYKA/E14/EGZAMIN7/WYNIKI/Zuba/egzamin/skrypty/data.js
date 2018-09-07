function data() {

var nazwy_mies = [ 'Styczen', 'Luty', 'Marzec', 'Kwiecien', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpien', 'Wrzesien', 'Pazdziernik', 'Listopada', 'Grudzien' ];
	
	
    var Today = new Date();
    var Month = Today.getMonth();
    var Day = Today.getDate();
    var Year = Today.getFullYear();
       if(Year <= 99)    Year += 1900
    return  Day + " " + nazwy_mies[Month] + " " + Year + "r";
}