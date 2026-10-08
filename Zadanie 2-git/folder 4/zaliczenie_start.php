<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./zaliczenie_start.php" method="POST">
    <form>
        <label for="name">Imię : </label>
        <input type="text" id="name" name="name"></br>

        <label for="age">Wiek: </label>
        <input type="number" id="age" name="age"></br>
        <label for="sex">Płeć: </label>
        <input type="radio" name="sex" value="k"> Kobieta
        <input type="radio" name="sex" value="m"> Męszczyzna
        <br>
        <label for="game">ulubiona seria gier: </label> <br>
        <input type="checkbox" name="game4" value="Hoi4"> Hoi4 <br>
        <input type="checkbox" name="game3" value="Hoi3"> Hoi3 <br>
        <input type="checkbox" name="game2" value="Hoi2"> Hoi2 <br>
        <input type="checkbox" name="game1" value="Hoi"> Hoi <br>

        <input type="submit">
        
    </form>
</body>
</html>





<?php
if(isset($_POST["name"]) && isset($_POST["age"]) && !empty($_POST["name"]) && !empty($_POST["age"])){
    ECHO $_POST["name"];
    echo "</br>";
    ECHO $_POST["age"]; 
}else{
    echo "Wypełnij pola";
}

if(isset($_POST["sex"])){
    if($_POST["sex"] == "m"){
        echo "M";
    }else{
        echo "K";
    }
}
//weryfikacja wybranej gry
if(isset($_POST["game1"]) && $_POST["game1"]) == "Hoi4"{
    echo "Wybrana gra: Hoi4"
}
for($i = 1; $i<=4;$i++){
    if(isset($_POST["game".$i])){
        echo "<br>";
        echo $_POST["game".$i];
    }g
}
?>

