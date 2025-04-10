<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="numer">Podaj liczbę: </label>
        <input type="number" id="numer" name="numer">
        <br>
        <br>
        <label for="wybor">Wybierz przedrostek: </label>
        <input type="select" id="wybor" name="wybor"></input>
        <br>
        <br>
        <input type="submit" value="Wybierz">
    </form>

    <?php
    
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        ?>
        
        <p>Oto twój wybór: <?=$_SESSION("wybor")?></p>

        <?php
    }
    
    
    
    ?>

</body>
</html>