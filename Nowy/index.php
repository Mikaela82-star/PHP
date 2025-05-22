<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
    display:block;
    text-decoration: none;
    padding: 10px;
    color: white;
}
a:hover{
    background-color: pink;
    color:black;
    font-family: URW Chancery L, cursive;
}
* {
  box-sizing: border-box;
}


.column1 {
  float: left;
  width: 30%;
  padding: 10px;
  height: 300px; 
  font-family: OCR A Std, monospace; 
}
.column2 {
  float: left;
  width: 70%;
  padding: 10px;
  height: 100%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<div class="row">
  <div class="column1" style="background-color:#aaa;">
        <a href="index.php?page=glowna">Strona Główna</a>
        <a href="index.php?page=czytelnicy">Tabela czytelnicy</a>
        <a href="index.php?page=dzialy">Tabela działy</a>
        <a href="index.php?page=ksiazki">Tabela książki</a>
        <a href="index.php?page=pracownicy">Tabela pracownicy</a>
        <a href="index.php?page=stanowiska">Tabela stanowiska</a>
        <a href="index.php?page=wypozyczenia">Tabela wypożyczenia</a>
  </div>
  <div class="column2" style="background-color:#bbb;">
    <?php
            if (isset($_GET['page'])) {
            if (file_exists('pages/' . $_GET['page'] . '.php')) {
                include 'pages/' . $_GET['page'] . '.php';
            } else {
                echo '<h1>Nie znaleziono żądanej strony</h1>';
            }
        } else {
            include 'pages/glowna.php';
        }
    ?>
  </div>
</div>

</body>
</html>
