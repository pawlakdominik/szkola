<!DOCTYPE html>
<html>
<body>

<?php
//wersja php
echo PHP_VERSION; //7.1.1-1

$pow= 2**10;
echo $pow; //1042


$x=10;
$y=3;


echo $x<=>$y;

/*
komentarz 
w wielu 
liniach
*/

//porównanie oraz identycznosc
$x=1;
$y=1;

if ($x==$y) {
echo "Równe";}
else{
echo "Różne";}



$x=1;
$y=1.0;


if ($x===$y) {
echo "Równe";}
else{
echo "Różne";}

echo gettype($x);
echo gettype($y). '<hr>';

/*
postinkrementacja $x++
preinkrementacja ++$x
postinkrementacja $x--
predekrementacja --$x
*/

$x=10;
$x++;
echo $x; //11
$x=$x++;
echo $x; //11
$y=$x++;
echo $x; //12
echo $y; //11


//zadanie
$x=1;
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x; 
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=$x++;
echo $x; //4
echo $y; //3


?> 

</body>
</html>
