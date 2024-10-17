<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

 table{
    border-collapse: collapse;
 }
 td{
    border-style: solid;
    border-width: 1px;
    border-color: deeppink;
    padding: 10px;
 }
 .specj{
    background-color: hotpink;
 }
    

</style>

<body>
    
<table>
<?php

$oceny=['niedostateczna','dopuszczająca','dostateczna','dobra',
'bardzodobra','celująca'];


foreach($oceny as $ocena){
    echo "<tr>";
 if($ocena=='celująca'){
    echo "<td class='specj'>$ocena</td>";
  }
  else  echo "<td>$ocena</td>";

} echo "</tr>";

?>
</table>

</body>
</html>