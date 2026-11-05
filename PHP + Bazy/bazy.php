<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "warehouse";



//Tworzenie połączenia
$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error){
    die("połaczenie nie powiodło się: ". $con->connection_error);
}
echo "połączenie się powiodło.";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lekcja 17 łączenie z bazą danych</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">nazwa</label>
        <input name='name' type='text'>
        <br><br>
        <label for="price">Cena</label>
        <input name='price' type='text'>
        <br><br>
        <label for="amount">ilość</label>
        <input name='amount' type='text'>
        <br><br>
        <input type='submit' value='wyślij'>
    </form>
<?php
    if(isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["amount"])){
        echo "Nazwa: ".$_POST["name"]."<br>";
        echo "Cena: ".$_POST["price"]."<br>";
        echo "Ilość: ".$_POST["amount"]."<br>";

        $name = $_POST["name"];
        $price = $_POST["price"];
        $amount = $_POST["amount"];
    //     //tabela products
    //     //Pola: id, name, price, amount

        $sql = "INSERT INTO Products (name,price,amount) VALUES (?, ?, ?)";
        $stmt = $conn -> prepare($sql); //przygotowuje na połączeniu zapytanie SQL
        $stmt -> bind_param("sid", $name,$price,$amount);
        
        $stmt -> execute();
        $stmt -> close();
    }
?>
</body>
</html>