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
$car = array("Fiesta","Focus", "Puma", "Kuga");
$poeta = array("Adam Mickiewicz", "24 grudnia 1798");

echo "<p>Moje ulubione auta to: "
    . $car[0] . ", "
    . $car[2] . " i "
    . $car[3] . "</p>";

$rozmiar = count($car);


for($x=0; $x<$rozmiar; $x++){
    echo $car[$x] . "<br>";
}
?>

<?php
$modele = array("Audi"=>"A6", "Opel"=>"Zafira");
$ludzie = array("Staś"=>"26", "Andrzej"=>"26", "Ania"=>"19");

echo "<p> Staś ma "
    . $ludzie['Staś'] . " lat </p>";

foreach($ludzie as $Stas => $wiek){
    echo"Osoba: " . $Stas . ", wiek:" . $wiek  . "<br>";
}
?>
<pre>
<?php
print_r($ludzie);

?>
</pre>
<pre>
<?php
$owoce = array_fill(1, 5, 'jabłko');
print_r($owoce);
?>
</pre>

<pre>
<?php
$parzyste = range(0, 12, $step=2);
print_r($parzyste);
?>

<?php
$dziesiatki = range(-10, 100, $step=10);
print_r($dziesiatki);
?>

<?php
$polowki = range(-5.5, 5.5, $step=0.5);
print_r($polowki);
?>

<?php
$litery_od_em = range('m', 'u');
print_r($litery_od_em);
?>

<?php
$litery_wstecz = range('X', 'E');
print_r($litery_wstecz);
?>
</pre>
</body>
</html>