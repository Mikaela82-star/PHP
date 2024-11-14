<?php
include_once('okrag_sfera_kula.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-color: #219ebc;
            color: #023047;
            font-family: Garamond;
            font-size: 18px;
            font-weight: bold;
            padding: 20px;
        }
        table{
            background-color: #8ecae6;
            border-collapse: collapse;
            width: 100%;
            table-layout: fixed;
        }
        td{
            border-style: solid;
            border-width: 4px;
            border-color: #ffb703;
            padding: 10px;
            text-align: center;
        }
    </style>
    
</head>
<body>
<table>
    <?php
        $temp = rand(0,99);
        $klasa = new OkragSferaKula($temp);
    ?>

    <tr> <td colspan=3>Promień kuli: r = <?=$temp?></td> </tr>
    <tr> <td>Obwód</td> <td>Pole powierzchni</td> <td>Objętość</td></tr>
    <tr> <td><i>L = 2&#8508;r</td> <td>P = 4&#8508;r<sup>2</sup></td> <td>V = &#8531; &#183; 4&#8508;r&#179;</td></i></tr>
    <tr> <td><?=$klasa->obw()?></td> <td><?=$klasa->pole()?></td> <td><?=$klasa->obj()?></td> </tr>

</table>
</body>
</html>