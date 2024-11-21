<?php
include_once('masagestosc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: linen;
            font-family: "Calibri";
        }
        span{
            background-color: yellow;
        }
    </style>
</head>
<body>

    <?php
        $obj1 = new Gest("gipsu",5);
        $obj2 = new Gest("rtęci",5);
        $obj3 = new Gest("złota",5);
        $obj4 = new Gest("woda",5);
    ?>

    <ol type="I">
        <li>Masa kulki <b>gipsu</b> o promieniu <u>5 cm</u>: <span><?=number_format($obj1->masa(), 3, ","," ")?> kg</span></li>
        <li>Masa kulki <b>rtęci</b> o promieniu <u>5 cm</u>: <span><?=number_format($obj2->masa(), 3, ","," ")?> kg</span></li>
        <li>Masa kulki <b>złota</b> o promieniu <u>5 cm</u>: <span><?=number_format($obj3->masa(), 3, ","," ")?> kg</span></li>
        <li>Masa kulki <b>wody</b> o promieniu <u>5 cm</u>: <span><?=number_format($obj4->masa(), 3, ","," ")?> kg</span></li>
    </ol>

</body>
</html>