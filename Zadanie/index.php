<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./" method="GET">
        <label for="imie" >Podaj imie:</label>
        <input type="text" name="imie" id="imie"></br>
        <button type="submit">Wyślij</button>
    </form>
</body>
</html>
<?php
$imiona= ["Adam", "Kasia", "Marek", "Ola", "Tomek"];
for($i=0; $i<count($imiona);$i++){
    if($_GET = $imiona[$i]){
        echo "Znaleziono imie";
    }
}






?>
