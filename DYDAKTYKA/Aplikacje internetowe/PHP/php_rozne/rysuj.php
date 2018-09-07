<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Libchart vertical bars demonstration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
    <img alt="Vertical bars chart" src="demo2.png" style="border: 1px solid gray;"/>
</body>
</html>
<?php
 
include "c:/usr/php5/libchart/classes/libchart.php";
 
    $chart = new LineChart(500,300);
 
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Styczeñ 2012", 273));
    $dataSet->addPoint(new Point("Luty 2012", 421));
    $dataSet->addPoint(new Point("Marzec 2005", 642));
    $dataSet->addPoint(new Point("April 2005", 800));
    $dataSet->addPoint(new Point("May 2005", 1200));
    $dataSet->addPoint(new Point("June 2005", 1500));
    $dataSet->addPoint(new Point("July 2005", 2600));
    $chart->setDataSet($dataSet);
 
    $chart->setTitle("Wplyw stosowania soli na zdrowie");
    $chart->render("demo2.png");
 
 ?>