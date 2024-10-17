<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$x=5;
$y=15;
$z=4;
$j=35;

echo "Wynik dodawania "."$x"." i "."$y"." wynosi ".$x+$y."<br>";
echo "Wynik odejmowania "."$x"." i "."$y"." wynosi ".$x-$y."<br>";
echo "Wynik mnozenia "."$x"." i "."$y"." wynosi ".$x*$y."<br>";
echo "Wynik dzielenia "."$x"." i "."$y"." wynosi ".$x/$y."<br>";
echo "Reszta z dzielenia "."$x"." i "."$y"." wynosi ".$x%$y."<br>";


$obw = ($z*2)+($j*2);
$p = ($z*$j);

echo "Pole prostokąta o bokach długości "."$z"."$j"." wynosi ".$p." j<sup>2</sup>"." a obwod "."$obw"."<br>";

?>

</body>
</html>