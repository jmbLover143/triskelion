<?php

session_start();
include("connection.php");

$name = $_POST['name'];
$address = $_POST['address'];
$age = $_POST['age'];
$month = $_POST['month'];
$date = $_POST['date'];
$year = $_POST['year'];
$alias = $_POST['alias'];
$chapter = $_POST['chapter'];
$gt = $_POST['gt'];
$mi = $_POST['mi'];
 
$birth = $month. " ".$date.", ".$year;
echo "$name<br/>";
echo "$address<br/>";
echo "$age<br/>";
echo "$birth<br/>";
 
echo "$alias<br/>";
echo "$chapter<br/>";
echo "$gt<br/>";
echo "$mi<br/>";

$sql = "Insert into ";
 
?>
