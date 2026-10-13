<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./zaliczenie_start.php" method="POST">
        <label for="login">Login: </label>
        <input type="text" id="login" name="login"></br>

        <label for="email">E-mail: </label>
        <input type="email" id="login" name="email"></br>

        <label for="password">Hasło: </label>
        <input type="password" id="password" name="password"></br>

        <label for="age">Wiek: </label>
        <input type="number" id="age" name="age"></br>

        <label>
            <input type="checkbox" name="regulamin" required>Akceptuje regulamin
        </label>
        </br>
        <button type="submit">Akceptuje Regulamin</button>
</form>
</body>
</html>
<?php 
$login = $_POST['login'] 
if(Ststrlen($login) >3){
    echo "Działa";
}                                     
?>

