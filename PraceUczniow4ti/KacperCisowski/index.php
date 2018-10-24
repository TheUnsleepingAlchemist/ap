<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        a {
            display: block;
            box-sizing: border-box;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Nagłówek</h1>
    <form method="POST" action="">
        <a>Marka: <input type="text" name="marka"></a>
        <a>Model: <input type="text" name="model"></a>
        <a>Rocznik: <input type="text" name="rocznik"></a>
        <a>Cena: <input type="text" name="cena"></a>
        <input type="submit" name="wprowadz" value="Wprowadź">
    </form>
    <h2>Wyszukaj auta</h2>
    <form method="POST" action="">
        <a>Rok &lt; <input type="number" name="szukajrok"></a>
        <a>Cena &lt; <input type="number" name="szukajcena"></a>
        <input type="submit" name="wyszukaj" value="Szukaj">
    </form>
    <br>
<?php

    if (isset($_POST['marka'],$_POST['rocznik'],$_POST['model'], $_POST['cena'], $_POST['wprowadz'])) {
        $marka = $_POST['marka'];
        $model = $_POST['model'];
        $rocznik = $_POST['rocznik'];
        $cena = $_POST['cena'];
        $plik=fopen("produkty.txt", "a");
        $produkt=$marka." | ".$model." | ".$rocznik." | ".$cena." | "."  zl"."\n";
        fputs($plik, $produkt);
    }

    if (isset($_POST['wyszukaj'], $_POST['szukajrok'], $_POST['szukajcena'])) {
        $szukajrok = $_POST['szukajrok'];
        $szukajcena = $_POST['szukajcena'];
        $file=file("produkty.txt", FILE_IGNORE_NEW_LINES);
        foreach($file as $line) {
            list($marka, $model, $rocznik, $cena) = explode(" | ",$line);
            $wysmarka = "Marka: ".$marka;
            $wysmodel = "Model: ".$model;
            $wysrocznik = "Rocznik: ".$rocznik;
            $wyscena = "Cena: ".$cena;
            
            if (($rocznik < $szukajrok) && ($cena < $szukajcena)) {
            echo " ".$wysmarka." ".$wysmodel." ".$wyscena." ".$wysrocznik."<br>";
        }
        }
        
    }
    
?>
</body>
</html>