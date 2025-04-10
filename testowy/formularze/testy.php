<?php
session_start();
if(!isset($_SESSION["questions"])){
    $plik=fopen("plik.json", "r");
    $odczyt=fread($plik, filesize("plik.json"));
    fclose($plik);
    $_SESSION["questions"] = json_decode($odczyt, true);

}

$questions=$_SESSION["questions"];

if(!isset($_SESSION["current_question"])) {
    if(is_array($questions)){
        shuffle($questions);
        $_SESSION["current_question"] = $questions[0];
    } else {
        $_SESSION["current_question"] = ["pl"=>"","en"=>""];
    }
    
}

$komunikat = "";
$punkty = 0;
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["odp"])) {
    if($_POST["odp"] === $_SESSION["current_question"]["en"]) {
        $komunikat = "✅ Prawidłowo!";
        $punkty = $punkty+1;
    } else {
        $komunikat = "❌ Nieprawidłowo. Poprawna odpowiedź to: " . $_SESSION["current_question"]["en"];
    }

    shuffle($questions);
    $_SESSION["current_question"] = $questions[0];
}

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["dobrze"])){
    echo "✅ Prawidłowo!";
    $punkty = $punkty+1;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" autocomplete="off">
    
        
        <label for="odp"><?=$_SESSION["current_question"]["pl"] ?></label>
        <input type="text" name="odp" id="odp" ></input>
        <input type="submit" value="sprawdź">
        <input type="button" name="dobrze" value="dobrze">

    
    </form>

    <?php if($komunikat): ?>
        <p><?= $komunikat ?></p>
        <?php
        echo $punkty;
    endif; ?>

</body>
</html>
