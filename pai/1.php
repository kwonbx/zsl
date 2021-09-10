<?php
echo "Text<br><t>";
$name="Krystyna";
echo "Imię: $name<br>";

//typy danych!!


//całkowite
$całkowita=10;
$bin=0b1010; //10
$oct=011; //9
$hex=0x11; //17


//zmiennoprzecinkowe
$x=10.5;
echo gettype($x);


//logiczna
$prawda=true;
$fałsz=false;


//składnia heredoc
//służy do wyświetlenia danych
echo <<< E
<hr> <br>Imię: $name<br><br>
ZSŁ
<hr>
E;


//2 wersja heredoca (nie działa mi)
$text = <<< P
<hr> <br>Imię: $name<br><br>
ZSŁ
<hr>
P;


//nowdoc
echo <<< 'E'
<hr>Imię: $name<br>
ZSŁ
<br><br><hr>
E;


//konkatenacja
echo "text1"."text2";
//dzięki backslashowi traktuje zmienną jako stringa
echo "<br><br>Imię: \$name"; 

echo "test<br><br>";
echo 2**10, '<br>';


//porównywanie (1 lub -1 w outpucie)
$x=1000;
$y=100;
echo $x<=>$y;


//równe lub identyczne
$x=1;   //jako integer
$y=1.0; //jako double
if($x==$y)
{
    echo "<br>Equal";

}
else
{
    echo "<br>Not Equal";
}


//równe lub identyczne + typ danych
$x=1;   //jako integer działa
$y=1.0; //jako double działa
if($x===$y)
{
    echo "<br>Equal";

}
else
{
    echo "<br>Not Equal"; //wynik to "Not Equal" bo różne typy danych (int and double)
}

?>
