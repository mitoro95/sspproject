<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$a=$_POST['first'];
$b=$_POST['second'];
$c=$_POST['third'];
$avg=($a+$b+$c)/3.0;
echo "Average is $avg";
?>
