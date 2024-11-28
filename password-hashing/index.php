<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hashing</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <form action="index.php" method="POST"> <br>

    <input type="text" name="sifre" placeholder="Parolanızı giriniz..."> <br> <br>
    <input type="submit" value="Gönder">

    </form>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $sifre = $_POST['sifre'];

    $Hashlisifre = password_hash($sifre, PASSWORD_BCRYPT);

    echo "Hashli Parola: $Hashlisifre";

}
?>