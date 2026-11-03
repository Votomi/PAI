<?php
$host = "localhost";
$username = "root";
$password ="";
$database ="warehouse";
//Tworzenie połączenia
$conn = new mysqli($host,$username,$password,$database);


if($conn->connect_error){
    die("Połączenie się nie powiodło: " . $conn->connect_error);
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
<form action="./index.php" method="POST">

    <label for="nazwa_produktu">Podaj nazwę produktu:</label>
    <input type="text" name="nazwa_produktu" id="nazwa_produktu">
    </br>
    <label for="cena_produktu">Cena jednego produktu:</label>
    <input type="number" step="0.01" name="cena_produktu" id="cena_produktu">
    </br>
    <label for="ilosc">Podaj ilosc:</label>
    <input type="number" name="ilosc" id="ilosc">
    </br>
    <button type="submit">Wyślij</button>
</form>

</body>
</html>
<?php
if(isset($_POST["nazwa_produktu"]) && isset($_POST["cena_produktu"]) && isset($_POST["ilosc"])){

    $name = $_POST["nazwa_produktu"];
    $amount = $_POST["ilosc"];
    $price = $_POST["cena_produktu"];

    $sql = "INSERT INTO products (name,amount,price) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sid", $name, $amount, $price);

    if($stmt->execute()){
        echo "Udało się dodać";
    } else {
        echo "Bluescreen". $stmt->error;
    }

    $stmt->close();
    mysqli_close($conn);
}
?>