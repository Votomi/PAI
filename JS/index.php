<?php
$host = "localhost";
$username = "root";
$password ="";
$database ="warehouse";
//Tworzenie połączenia
$conn = new mysqli($host,$username,$password,$database);


if($conn->connect_error){
    die("Połączenie się nie powiodło") . $conn->connect_error;
}
echo "Połączenie się powiodło";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Zadanie 1
    <form action="./index.php" method="GET">
    <labe for="imie">Imie:</labe>
    <input type="text" name="imie" id="imie">
    <button type="submit">Wyślij</button>
</form> -->
<!-- <form action="./index.php" method="POST">
    <label for="wiek">Wiek:</label>
    <input type="number" id="wiek" name="wiek">
    <button type=submit>Wyślij</button>
</form>
     -->
<form action="./index.php" method="POST">

    <label for="nazwa_produktu">Podaj nazwę produktu:</lable>
    <input type="text" name="nazwa_produktu" id="nazwa_produktu">
    </br>
    <label for="cena_produktu">Cena jednego produktu:</label>
    <input type="number" name="cena_produktu" id="cena_produktu">
    </br>
    <label for="ilosc">Podaj ilosc:</label>
    <input type="number" name="ilosc" id="ilosc">
    </br>
    <button type="submit">Wyślij</button>
</form>

</body>
<?php
// if(isset($_GET['imie'])){
//     echo $_GET['imie'];
// }
// if(isset($_POST['wiek'])){
//     echo $_POST['wiek'];
// }
// if(isset($_POST["nazwa_produktu"]) && isset($_POST["cena_produktu"]) && isset($_POST["ilosc"])){
//     $cena = $_POST['cena_produktu'];
//     $ilosc = $_POST['ilosc'];
//     $koszt = $cena*$ilosc;
//     echo $_POST["nazwa_produktu"]." Ilość: ".$ilosc .", Cena: ".$cena." Suma: ".$koszt;
// }
// $conn; //ustawienie połączenie DO UZUPEŁNIENIA
if(isset($_POST["nazwa_produktu"]) && isset($_POST["cena_produktu"]) && isset($_POST["ilosc"])){
    echo "</br>";
    echo "Nazwa ".$_POST["nazwa_produktu"]."</br>";
    echo "Cena ".$_POST["cena_produktu"]."</br>";
    echo "Ilość ".$_POST["ilosc"]."</br>";

    $name = $_POST["nazwa_produktu"];
    $amount = $_POST["ilosc"];
    $price = $_POST["cena_produktu"];
//tabela Produkt
    $sql = "INSERT INTO products (name,amount,price) VALUES (?,?,?)";
    $stmt = $conn -> prepare($sql); //przygotowuje na połączeniu zapytanie sql
    $stmt ->bind_param("sid",$name,$price,$amount);
    $stmt ->execute();

    
    


}

?>
</html>