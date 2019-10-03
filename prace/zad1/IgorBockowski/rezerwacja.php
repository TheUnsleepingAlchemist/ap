<?php

$link = mysqli_connect('localhost', 'root', '', 'baza');

$data = $_POST['data'];

$osob = $_POST['osob'];

$nrtel = $_POST['nrtel'];


mysqli_query($link, "INSERT INTO rezerwacje VALUES('', '', '$data', '$osob', '$nrtel')");

mysqli_close($link);