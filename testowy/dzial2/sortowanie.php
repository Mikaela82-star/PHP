<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table{
        border-collapse:collapse;
    }
    td,tr{
        border-width: 1px;
        border-style: dotted;
        border-color: black;
        padding: 3px;
    }
    .nagl{
        font-weight:bold;
        text-align:center;
    }
    

</style>

<body>
    
<?php

$tab['Skazani na Shwanki']='dramat';
$tab['Nietykalni']='biograficzny';
$tab['Władca Pierścieni: Powrót króla']='fantasy';
$tab['Pulp Fiction'] = 'gangsterski';
$tab['Siedem'] = 'kryminał';
$tab['Podziemny krag'] = 'thriller';
$tab['Django'] = 'western';
$tab['Król Lew'] = 'animacja';
$tab['Avengers: Wojna bez granic'] = 'akcja';
$tab['Dobry, zły i brzydki'] = 'western';

echo"<pre>";
print_r($tab);
echo"</pre>";

echo "<table>";

asort($tab);

echo "<caption>Sortowanie rosnąco według wartości [asort]</caption>";
echo "<tr class='nagl'><td>Klucz</td><td>Wartość</td></tr>";
foreach($tab as $key=>$poj){
   echo "<tr><td>$key</td><td>$poj</td></tr>";
}

echo "</table>";

echo "<table><br>";

arsort($tab);

echo "<caption>Sortowanie malejąco według wartości [arsort]</caption>";
echo "<tr class='nagl'><td>Klucz</td><td>Wartość</td></tr>";
foreach($tab as $key=>$poj){
   echo "<tr><td>$key</td><td>$poj</td></tr>";
}
   
echo"</table> <table> <br>";

ksort($tab);

echo "<caption>Sortowanie malejąco według wartości [ksort]</caption>";
echo "<tr class='nagl'><td>Klucz</td><td>Wartość</td></tr>";
foreach($tab as $key=>$poj){
   echo "<tr><td>$key</td><td>$poj</td></tr>";
}

echo "</table> <table> <br>";

ksort($tab);

echo "<caption>Sortowanie malejąco według wartości [krsort]</caption>";
echo "<tr class='nagl'><td>Klucz</td><td>Wartość</td></tr>";
foreach($tab as $key=>$poj){
   echo "<tr><td>$key</td><td>$poj</td></tr>";
}

?>
</table>

</body>
</html>