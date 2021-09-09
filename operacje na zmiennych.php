
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
echo gettype($y);
?> 

</body>
</html>