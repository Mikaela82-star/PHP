<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
  $tab=range(0,12,2);
  $dziesiatki=range(-10,100,10);
  $polowki=range(-5.5,5.5,0.5);
  $litery_od_em=range('m','u');
  $litery_wstecz=range('X','E');

echo "<pre>";
 print_r($tab);
echo "<pre>";

  foreach($tab as $element){
    echo $element," ";
  }

echo "<br>";
echo "<br>";

  foreach($dziesiatki as $element){
    echo $element," ";
  }

echo "<br>";
echo "<br>";

  foreach($polowki as $element){
      echo $element," ";
    }

echo "<br>";
echo "<br>";

  foreach($litery_od_em as $element){
      echo $element," ";
      }   

echo "<br>";
echo "<br>";

  foreach($litery_wstecz as $element){
      echo $element," ";
        }
    ?>
</body>
</html>