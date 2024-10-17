<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    
    .ozd{
        color: limegreen;
    }
    .nieozd{
        border-left-style: solid;
        border-width: 1px;
    }
    
    </style>

</head>
<body>
   
<table>
<?php

$tab=range(-9,9);

echo "<h2>";
foreach($tab as $liczba){
     
  if($liczba%3==0){ 
  echo "<span class='ozd'>$liczba</span>";
  }
  else {
    echo $liczba;
  }

  if ($liczba != 9) {
    echo "|";
  }

} echo "</h2>";

?>
</table>
</body>
</html>