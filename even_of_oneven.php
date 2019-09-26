<?php
echo "Geef een cijfer op: ";
$a = readline();
$b = 2;

$c = $a % $b;
if ($c == 1) 
    echo "Uw getal is oneven"; 
if ($c == 0) 
    echo "Uw getal is even"; 
?>