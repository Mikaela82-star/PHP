<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      fieldset{
        border: 2px black;
      }
      .lorum50{
        color: red;
        font-style: italic;
      }
    </style>
</head>
<body>
<fieldset>
    <legend>lorem50</legend>
<?php
    
if($_SERVER["REQUEST_METHOD"]==="POST"){
?>
    <p>Oto wpisany tekst: </p>
    <p class="lorum50"><?=$_POST["textarea"]?></p>
<?php
}else{

?>

<form method="post">

    <textarea cols=50 rows=5 name="textarea">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus repellendus unde saepe odit fugiat cupiditate aperiam quam, voluptas tenetur sit perspiciatis. Maxime dicta ipsum eligendi cumque eum ratione numquam doloremque perspiciatis, sequi, enim qui consequuntur maiores nostrum neque quos fugit, nihil perferendis quam minima nam! Omnis non magnam eaque quidem.</textarea>

<br>

    <input type="submit" value="Wyślij">
</form>

<?php
}
?>
</fieldset>

</body>
</html>