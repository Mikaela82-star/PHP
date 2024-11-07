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
$licz = new Arytmetyka(6,5);

?>

<ul>
    <li>Suma liczb <?=$a,$b?> jest równa <?=suma($a,$b)?></li>
    <li>Suma liczb <?=$a,$b?> jest równa <?=roznica($a,$b)?></li>
    <li>Suma liczb <?=$a,$b?> jest równa <?=iloczyn($a,$b)?></li>
    <li>Suma liczb <?=$a,$b?> jest równa <?=iloraz($a,$b)?></li>
    <li>Suma liczb <?=$a,$b?> jest równa <?=reszta($a,$b)?></li>
    <li>Suma liczb <?=$a,$b?> jest równa <?=potega($a,$b)?></li>
</ul>

</body>
</html>