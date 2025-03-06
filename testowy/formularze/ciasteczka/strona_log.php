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
    <h1>Autoryzacja</h1>
    <?php
    if ($SERWER['REQUEST_METHOD']==='POST')
    {
        if (isset($POST["wyloguj"]))
        {

        }

        if (isset($POST["zaloguj"]))
        {
            if ($POST['login'] === 'admin' && $POST['pass'] === 'admin')
            {

            }
            else
            {
                echo '<p>Login lub hasło są niepoprawne</p>';
            }
        }
    }
    ?>
    <form method="post">
        <?php
        if (isset($_SESSION["login_status"]) && $_SESSION["login_status"])
        {
            echo "Jesteś zalogowany jako";

        }
        else
        {

        }
        ?>
    </form>
    <?php include "stopka.php"; ?>
</body>
</html>