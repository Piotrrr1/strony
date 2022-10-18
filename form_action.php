<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Formularz</title>
</head>
<body>
<fieldset>
    <legend>Elementy tablicy GET</legend>
    <?php
    foreach ($_GET as $key => $value) {
        echo "<li> $key => $value</li>";
    }
    ?>
</fieldset>
<fieldset>
    <legend>Elementy tablicy POST</legend>
    <?php
    foreach ($_POST as $key => $value) {
        echo "<li> $key => $value</li>";
    }
    ?>
</fieldset>
</body>