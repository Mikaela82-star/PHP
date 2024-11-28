<?php
include('stozek.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border-bottom: 3px solid magenta;
            border-top: 3px solid magenta;
            display: inline-block;
        }
        body{
            background-color: lightpink;
            color: darkmagenta;
            font-family: Consolas;
            font-size: 50px;
            padding: 100px 0px 100px 0px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $r=5;
    $h=10;
    $obj = new Stozek($r,$h);
    ?>
    <div>
        <p>Stożek</p>
        <p>Promień: R = <?=$r?> km</p>
        <p>Wysokość: R = <?=$h?> km</p>
        <p>Pole: P = <?=number_format($obj->pole_calkowite(), 2, ","," ")?> km<sup>2</sup></p>
        <p>Objętość: V = <?=number_format($obj->objetosc(), 2, ","," ")?> km<sup>2</sup></p>
    </div>
</body>
</html>