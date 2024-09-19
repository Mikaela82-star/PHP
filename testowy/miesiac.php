<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$mies = rand(1,12);

switch($mies){
    case 1:
    case 2:
    case 3:
      $typ="I kwartał";
      break;
    case 4:
    case 5:
    case 6:
      $typ="II kwartał";
      break;
    case 7:
    case 8:
    case 9:
      $typ="III kwartał";
      break;
    case 10:
    case 11:
    case 12:
      $typ="IV kwartał";
      break;
    default:
      $typ="Błędny numer miesiąca";
      break;
}

?>

<hr>
<h1><?=$mies?></h1>
<hr>
<h3><?=$typ?></h3>
<hr>





</body>
</html>