<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "Piotr";
$password = "123456789";

$mysqliConnection = mysqli_connect($servername, $username, $password);

if (!$mysqliConnection)
{
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: ". mysqli_connect_error());
}
echo "Połączono z bazą danych.";
mysqli_close($mysqliConnection);
?>

<br><br>

<?php
$servername = "localhost";
$username = "Piotr";
$password = "123456789";

$mysqliConnection = new mysqli($servername, $username, $password);

if ($mysqliConnection->connect_error)
{
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: ". $mysqliConnection->connect_error);
}
echo "Połączono z bazą danych.";
$mysqliConnection->close();
?>

<br><br>

<?php
$servername = "localhost";
$username = "Piotr";
$password = "123456789";
$database = "bazapiotr";
try {
    $pdoConnection = new PDO("mysql:host=$servername;dbname="
    . $database,$username, $password);
    $pdoConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Połączono z bazą danych.";
    $pdoConnection = null;
} catch (PDOException $e) {
    echo "Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: ". $e->getMessage();
}
?>
</body>
</html>
