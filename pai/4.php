<?php
$text = <<<T
  zsł - Zespół
  Szkół
  Łączności
T;

echo "$text<br>";
echo nl2br($text);

$name="jaNuSz";
//zamiana na małe litery
echo strtolower($name); //janusz
//zamiana na duże litery
echo strtoupper($name); //JANUSZ

$data="jaNuSz kowAlski";
//zamiana pierwszej litery na dużą
echo ucfirst($data);
//zamiana każdej pierwszej litery na dużą
echo ucwords($data);

$lorem="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor pulvinar eleifend. Sed dignissim rhoncus ante eu pellentesque. Curabitur non enim efficitur, placerat urna eget, iaculis neque. Aenean scelerisque ornare ante at egestas. Quisque faucibus odio et placerat aliquam. In tincidunt sollicitudin egestas. Integer pulvinar mi libero, sed tempor felis malesuada ut.";

echo "<hr>$lorem<hr>";
$col=wordwrap($lorem,40,"<br>");
echo $col;

//czyszczenie zawartości bufora
ob_clean();

//usuwanie białych znaków
$name="Anna";
$name1="  Anna ";
echo "Długość \$name: ",strlen($name),'<br>'; //4
echo "Długość \$name1: ",strlen($name),'<br>'; //7
echo strlen(ltrim($name1)); //5
echo strlen(rtrim($name1)); //6
echo strlen(trim($name1)); //4

//przeszukiwanie ciągów znaków
echo strstr("janusz@gmail.com","@"); //@gmail.com
echo stristr("janusz@gmail.com","G"); //gmail.com

$name="Janusz";
echo substr($name,2); //nusz
echo substr($name,2,3); //nus
echo substr($name,-2); //sz
echo substr($name,-2,1); //s
echo substr(strstr("janusz@gmail.com","@"),1); //gmail.com

?>
