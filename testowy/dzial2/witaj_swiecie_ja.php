<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    table{
        border-collapse: collapse;
    }
    td{
       border-width: 3px;
       border-style: dotted;
       border-color: red;
       padding: 15px; 
    }

</style>

<body>

<table>

    <?php
    $tekst="Kon'nichiwa sekai";
    $znaki=str_split($tekst);
    
    echo "<tr>";
    foreach($znaki as $znak){
    echo "<td>$znak</td>";
    }

    ?>

</table>
</body>
</html>