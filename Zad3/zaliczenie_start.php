<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./zaliczenie_start.php" method="GET">

        <input type="text" id="imie" name="imie" placeholder="Imie">
        <input type="number" id="wiek" name="wiek"placeholder="Wiek">
        <a>Bilet: </a>
        <select id="bilet" name="bilet">
            <option value="normalny">Normalny</option>
            <option value="ulgowy">Ulogwy</option>
        </select>
        <button type="submit" id="btn">Oblicz cene</button>
    </form>
</body>
</html>
<?php 
$wiek = $_GET['wiek'];
$bilet = $_GET['bilet'];
$cena = "";
if($bilet == "normalny" && $wiek > 7){
    $cena= 30;
}else if($bilet == "ulgowy" && $wiek>7){
    $cena = 15;
}else if($wiek <= 0){
    $cena = 0;
}
echo "Cześć, " . $_GET['imie'] . "!<br>";
echo "Twój wiek: ". $_GET['wiek']. "<br>";
echo "Rodzja biletu: ". $_GET['bilet']. "<br>";
echo "Cena biletu: ". $cena. "<br>";
?>

