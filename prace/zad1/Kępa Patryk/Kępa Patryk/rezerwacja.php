 <?php
        @$data=$_POST['data'];
        @$osoby=$_POST['osoby'];
        @$phone=$_POST['phone'];
        
        
        $polaczenie=mysqli_connect('localhost', 'root', '', 'baza')
or die ("Błąd w połączeniu z bazą");
        
        $pytanie=mysqli_query($polaczenie, "Insert into rezerwacje set data_rez=$data, liczba_osob=$osoby, telefon=$phone");

    
        
        if(isset($_POST['rezerwuj']))
            echo "Rezerwacja Udana";

  
        
        mysqli_close($polaczenie);
        ?>