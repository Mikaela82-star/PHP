<?php
    include_once('artymetyka.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$licz = new Arytmetyka(0.005,0.002);
?>

<ul type="square" style= background-color:cyan>
    <li>Suma liczb <strong><?=$licz->a," ",$licz->b?></strong> jest równa <strong><?=$licz->suma()?></strong></li>
    <li>Suma liczb <strong><?=$licz->a," ",$licz->b?></strong> jest równa <strong><?=$licz->roznica()?></strong></li>
    <li>Suma liczb <strong><?=$licz->a," ",$licz->b?></strong> jest równa <strong><?=$licz->iloczyn()?></strong></li>
    <li>Suma liczb <strong><?=$licz->a," ",$licz->b?></strong> jest równa <strong><?=$licz->iloraz()?></strong></li>
    <li>Suma liczb <strong><?=$licz->a," ",$licz->b?></strong> jest równa <strong><?=$licz->reszta()?></strong></li>
    <li>Suma liczb <strong><?=$licz->a," ",$licz->b?></strong> jest równa <strong><?=$licz->potega()?></strong></li>
</ul>

</body>
</html>