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
<ol type="i">

    <?php
    for ($n = 1; $n <= 100; $n++ ){
        echo "<li>To jest $n element listy</li>";
        break;
    }
    ?>
</ol>
<hr>
<?php
$str="Witaj Swiecie";
$arr1 = str_split($str);
print_r($arr1);
?>
<br>ffdfs
<table cellspacing="0" border="1">
    <?php
    $j=1;
    while($j<=5) {
        echo "<tr bgcolor='#d3d3d3'><td>To jest wiersz numer $j</td></tr>";
        $j++;
    }
    ?>
</table>
<table bordercolor="lawngreen" cellspacing="0" border="1">

    <?php
    $j=1;
    do {
        echo "<tr bgcolor='#adff2fs'><td>To jest kolumna numer $j</td></tr>";
        $j++;
    }
    while($j<=5)
    ?>
</table>
</body>
</html>
