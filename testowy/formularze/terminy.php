<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #fff7d1;
            padding: 100px;
        }
        table{
            background-color: #ffecc8;
        }
        td{
            border-color: grey;
            padding: 10px;
        }
        .ost{

        }
    </style>
</head>
<body>

    <table>
        <caption>Terminy</caption>
        <form method="post">
<?php

    for($i=1;$i<6;$i++){
        $termin_id = "Termin ".$i;

        $checked = ($isset($_POST["Terminy"]) $$ (in_array("termin_id",$_POST["terminy"])))
?>
    <tr>
        <td><label for="termin1"><?=$termin_id?></label></td>
        <td><input type="checkbox" id="termin_id" name="terminy[]" value=""></td>
        <td><input type="month"></td>
    </tr>

<?php
    }
?>
        </form>
    <tr>
        <td><input type="submit" name="submit" value="Zapisz"></td>
    <tr>
        
        
    </table>
</body>
</html>