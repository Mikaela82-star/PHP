<?php
session_start()
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
    <?php include "menu.php"; ?>
    
    <h1>Panel administracyjny</h1>

    <p>
        <?php

        if (isset($_SESSION['user'])) {
            if($_SERVER["REQUEST_METHOD"] === 'POST')
            {
                $cookie_name = "nazwa_ciastka";
                $cookie_value = $_POST['zawartosc'];
                $cookie_time = $_POST['czas'];
                setcookie($cookie_name, $cookie_value, time() + $cookie_time, "/");
                echo "Ciastko ustawione";
            }
        }
        
        if (isset($_SESSION['user'])){
        ?>        
            <form method="post">
                <label for='nazwa'>Nazwa ciastka</label>
                <input type='text' name='nazwa' id='nazwa' value=<?=$cookie_name?>>
                <label for='czas'>Wygasa: (w sekundach)</label>
                <input type='czas' name='czas' id='czas'>
                <label for='ustaw'>Ustaw</label>
                <input type='submit' name='ustaw' value='Ustaw'>
            </form>
        <?php
            } else{
                echo "<p>Musisz być zalogowany żeby ustawić ciasteczko.</p>"
            }
            

        
        ?>
    </p>

<?php include 'stopka.php'?>

</body>
</html>