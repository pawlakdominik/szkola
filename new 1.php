<!DOCTYPE html>
<html>
<body>

<?php
echo 'ZSŁ<br>';
echo 'ZSŁ';

$name='Janusz';
echo '<br>Imię: $name'; //Imię: $name
echo "<br>Imię: $name <br>"; //Imię: $name


$x="Tomasz";
$y="Nowak";

echo "$x $y<br>";


//typy danych
//całkowity
$całkowita=10;
$bin=0b1010; //10
$oct=001; //9
$hex=0x11; //17
echo $hex;

//zmiennoprzecinkowy
$x=100.7;


//logiczny
$prawda=true;
$fałsz=false;


echo "<br>" .gettype($prawda); //boolean
echo "<br>" .gettype($hex); //integer
echo "<br>" .gettype($x);  //double


//składnia heredoc
$name="Krystyna<br>";
echo <<< ETYKIETA
<hr>Imię: $name<br>
ZSŁ<br>
ETYKIETA;


$text = <<< ETYKIETA
<hr>Anna Nowak<br>
ZSŁ<br>
ETYKIETA;

echo $text;




//składnia nowdoc
$name="Krystyna<br>";
echo <<< 'ETYKIETA'
<hr>Imię: $name<br>
ZSŁ<br>
ETYKIETA;





$name="Jagoda";
echo "Imię: $name, nazwisko: Pawlak<hr>";
?> 

</body>
</html>