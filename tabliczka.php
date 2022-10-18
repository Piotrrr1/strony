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
<caption>Tabliczka mnożenia</caption>
<table style="background-color: beige; border-color: black; padding:2px; border-style: solid;
border-collapse: collapse; border-width: 1px">
<?php
$n=1;
$b=10;
for ($n = 1; $n <= 10; $n++) {
    echo "<tr>";
    for ($b = 1; $b <= 10; $b++) {
        echo "<td style='border-color: black; border-style: dashed; padding: 5px; border-width: thin; 
               font-family: Verdana; font-size: large'>";
        echo $n * $b;
        echo '</td>';
    }
    echo '</tr>';
}
?>
</table>
</body>
