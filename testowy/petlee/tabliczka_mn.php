<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
   table{
      border:1px solid black;
      border-collapse: collapse;
      border-width: 1px;
    border-style: solid;
    border-color: black;
    font-family: Verdana;
    font-size: large;
    text-align: center;
   }
 .komnag{
    border-width: 1px;
    border-style: dashed;
    border-color: black;
    background-color: burlywood;
    padding: 5px;
    border-spacing: 0px;
 }
 .komzw{
    background-color: beige;
    padding: 5px;
    border-style: dashed;
    border-width: 1px;
 }
 .komprz{
    background-color: bisque;
    padding:5px;
 }


</style>

</head>
<body>


<table>
   <caption>Tabliczka mnożenia
</caption>
<?php


for($i=0;$i<11;$i++){
   if($i==0){
      echo "<th class='komnag'>x</th>";
   }
   else{
    
    echo "<th class='komnag'>$i</th>";
    
   }
}
?>
<tr>
   <?php
for($j=1;$j<11;$j++){
   echo "<th class='komnag'>$j</th>";
   
   for($x=1;$x<11;$x++){
      $w=$j*$x;
      $s=1;
      if($x==$j) {
         echo "<td class='komprz'>$w</td>";
      }
      else {
         echo "<td class='komzw'>$w</td>";
      }
      
      
   
   
}
echo "</tr>";
}

?>
</table>

</body>
</html>