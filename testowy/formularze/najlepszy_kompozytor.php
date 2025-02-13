<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            border: 3px solid blue;
        }
        legend{
            padding: 7px;
            border-top: 3px solid blue;
            border-bottom: 3px solid blue;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Najlepszy kompozytor</legend>
<?php
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            ?>
            <p>Według Ciebie najlepszym kompozytorem jest: <?=$_POST["komp"]?></p>
            <?php
        }else{

?>
        <form method="post">
            <input type="radio" name="komp" value="Alexander Borodin" required>Alexander Borodin</input><br>
            <input type="radio" name="komp" value="Fryderyk Chopin" required>Fryderyk Chopin</input><br>
            <input type="radio" name="komp" value="Edvard Grieg" required>Edvard Grieg</input><br>
            <input type="radio" name="komp" value="Stanisław Moniuszko" required>Stanisław Moniuszko</input><br>
            <input type="radio" name="komp" value="Giuseppe Verdi" required>Giuseppe Verdi</input><br>
            <input type="radio" name="komp" value="Richard Wagner" required>Richard Wagner</input><br>
<br>
            <input type="submit" name="submit" value="Wybierz ulubionego kompozytora">
        </form>
    </fieldset>
<?php
        }

?>
</body>
</html>