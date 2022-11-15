<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table { border-collapse: collapse; } th, td { border: 1px solid black; }
    </style>

</head>
<body>

<?php
$servername = "localhost";
$username = "biblioteka";
$password = "123456789";
$database = "biblioteka";

$conn = mysqli_connect ($servername, $username, $password, $database);
$mysqliConnection = mysqli_connect($servername, $username, $password);

if (!$mysqliConnection)
{
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: ". mysqli_connect_error());
}
$query = 'SELECT ksiazki.Sygnatura,ksiazki.Tytul,ksiazki.Imie,ksiazki.Nazwisko,dzialy.Nazwa,ksiazki.Wydawnictwo,ksiazki.Rok_wyd,ksiazki.Objetosc_ks,ksiazki.Cena FROM `ksiazki` INNER JOIN dzialy ON dzialy.Id_dzial = ksiazki.Id_dzial WHERE `Objetosc_ks` > 500 ORDER BY ksiazki.Objetosc_ks;';
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
    echo '<table><tr><th>Sygnatura</th><th>Tytul</th><th>Autor</th><th>Dział</th><th>Wydawnictwo</th><th>Rok wydania</th><th>Ilość stron</th><th>Cena</th></tr>';
    while ($row = mysqli_fetch_assoc($result))
    {
        foreach($row as $servername => $username)
        {

            if($servername == 'Imie')
            {
                echo '<td>'.$username.' ';
            }
            elseif ($servername == 'Nazwisko')
            {
                echo $username.'</td>';
            }else{
                echo '<td>'.$username.'</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}
else
{
    echo 'brak danych';
}
?>
</body>
</html>
