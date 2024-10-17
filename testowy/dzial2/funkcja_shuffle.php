<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

table{
    width: 100%;
    background-color: aliceblue;
    border-color: dodgerblue;
    border-width: 1px;
    border-style: solid;
    border-collapse: collapse;
}
td{
    border-color: dodgerblue;
    border-width: 1px;
    color: blue;
    text-align: center;
    border-style: solid;
    padding: 10px;
}

</style>

<body>

<table>
<?php

$tab=range(0,10);
shuffle($tab);

echo "<tr>";
foreach($tab as $liczba){
  echo "<td>$liczba</td>";
}
echo "</tr>";

?>
</table>
</body>
</html>