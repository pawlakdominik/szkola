<?php
$text = <<< L
ZSŁ - Zespół
Szkół
Łączności<br>
L;

echo $text;
echo nl2br($text);

$name='jaNuSZ';
//zamiana wszystkich liter na małe
$name=strtolower($name);
echo $name;//janusz
//zamiana wszystkich liter na duże
echo strtoupper($name);//JANUSZ

//zamiana pierwszej litery na dużą
$nameSurname = "januSZ koWALski";
echo ucfirst($nameSurname); //JanuSZ koWALski

//zamiana każdej pierwszej litery w słowie na dużą
echo ucwords($nameSurname); //JanuSZ KoWALski

//zmiana wszystkich liter na małe a pierwszej na dużą
$name="jAnuSZ";
echo "<br>$name";
echo ucfirst(strtolower($name)); //Janusz

$lorem="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

echo $lorem;
$col=wordwrap($lorem, 30, "<br>");
$col=wordwrap($lorem, 30, "TEXT");
$col=wordwrap($lorem, 30, "<hr>");
echo $col;


//wyczyszczenie bufora
//ob_clean();


//usuwanie białych znaków
$name="Janusz";
$name1="  Janusz ";
echo "Długość \$name: " .strlen($name)."<br>";//6
echo "Długość \$name1: " .strlen($name1)."<br>";//9
echo strlen(ltrim($name1)); //7
echo strlen(rtrim($name1)); //8
echo strlen(trim($name1))."<hr>";  //6



//przeszukiwanie ciągów znaków
$mail="janusz@gmail.com";
echo strstr($mail, "@"); //@gmail.com
echo strstr($mail, "G"); //nic nie wyświetli
echo stristr($mail, "G")."<br>"; //gmail.com


//substr
echo substr($mail, 2);//nusz@gmail.com
echo substr($mail, 6);//@gmail.com
echo substr($mail, -3);//com
echo substr($mail, 2);//nusz@gmail.com
echo substr($mail, -2, 1)."<br>";//o

//zadanie
$personality="Janusz Kowalski";
/*do zmiennej name przypisać imię, do zmiennej surname przypisać nazwisko wykorzystując funkcję substr
*/

$name= substr($personality, 0, 6);
echo $name. "<br>";

$surname=substr($personality, 7);
echo $surname. "<br>";



?>