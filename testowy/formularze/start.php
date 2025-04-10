<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(207, 237, 252);
        }
        table{
            width: 50%;
            table-layout: auto;
        }

        @media screen and (max-width: 600px){
            table, thead, tbody, th, td, tr{
                display: block;
            }
        }

        table, th, td{
            border: 1px solid black;
            border-collapse: collapse; /*usuwa podwójne linie*/
        }
        td{
            background-color: rgb(85, 172, 230);
            color: black;
            position: relative;
            padding-left: 50px;
        }
        td::before{
            content:attr(data-label);
            position: absolute;
            left: 0;
            width: 45%;
            white-space: nowrap;
        }
        th{
            background-color: rgb(154, 218, 214);
            color: black;
        }
        td, th{
            padding: 10px;
            width: 250px;
            height: 30px;
            text-align: center; /* wyśrodkowanie tekstu */
        }
        .div1{
            margin-top:10px;
        }

    </style>
</head>
<body>

    <?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if($_POST["wyslij"] === "dodaj"){
            if(!isset($_SESSION["questions"])){
                $_SESSION["questions"] = [];
            }
            $_SESSION["questions"][] = ["pl" => $_POST["poj"], "en" => $_POST["tlum"]];
            $plik=fopen("plik.json", "w");
            fwrite($plik, json_encode($_SESSION["questions"]));
            fclose($plik);
        }else{
            session_unset();
            session_destroy();
        }
    }

    ?>


<form method="post" autocomplete="off">
    <table>
        <tr>
            <th><label for="poj">Pojęcie</label></th>
        </tr>
        <tr>
            <td><input type="text" name="poj" id="poj" placeholder="Wpisz po angielsku" required></td>
        </tr>
        <tr>
            <th><label for="tlum">Tłumaczenie</label></th>
        </tr>
        <tr>
            <td><input type="text" name="tlum" id="tlum" placeholder="Wpisz po polsku" required></td>
        </tr>
    </table>

    <div class="div1" style="display: inline-block;">
        <input type="submit" name="wyslij" value="dodaj">
    </div>

</form>

    <form method="post" autocomplete="off">
        <div class="div1" style="display: inline-block;">
            <input type="submit" name="wyslij" value="usun sesje">
        </div>
    </form>
        <div class="div1" style="display: inline-block;">
            <button><a href="testy.php">Zakończ</a></button>
        </div>
    <br>
    <h1>Lista</h1>
    <ol>

    <?php
        if(isset($_SESSION) && isset($_SESSION["questions"])){
            foreach($_SESSION["questions"] as $question){
                ?>
                    <li><?=$question["pl"]." ".$question["en"]?></li>

                <?php

            }
                
        }else{
            ?>
            <li>Lista jest pusta</li>
            <?php
        }
    ?>

    </ol>
    

</body>
</html>
