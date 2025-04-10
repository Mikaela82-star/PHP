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
    <form>
        <label for="numer">Podaj miesiąc twoich urodzin: </label>
        <br>
        <input type="number" id="numer" name="numer" min=1 max=12></input>
        <br>
        <input type="buttom" value="Zapisz w sesji">
        <br>
        <br>
        <a href="wyswietl_miesiac.php">Wyświetl miesiąc</a>


    </form>
</body>
</html>