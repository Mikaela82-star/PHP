<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td{
            border-style: solid;
            border-width: 1px;
            border-color: limegreen;
            border-collapse: collapse;
        }
        td{
            padding: 6px;
        }
    </style>
</head>
<body>
    <form>
        <table>
        <label>Tygodnie</label>
        <?php
        for($a=1; $a<51; $a++){
            
            ?>
            <tr>
            <td><label for="weekend">Tydzień <?=$a?>:</label></td>
            <td><input type="week" id="weekend" name="weekend"></input></td>
            <?php
        }
        ?>
        <td><input type="button" value="Zapisz"></td>
        </tr>
        </table>
    </form>
</body>
</html>