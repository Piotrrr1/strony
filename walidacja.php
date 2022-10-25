<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    $login=$email=$strona=$miasto=$plecError='';
    $loginError=$emailError=$stronaError=$miastoError='';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["login"])) {
            $loginError = "Login jest wymagany!";
        } else {
            $login = $_POST["login"];
        }
        if (empty($_POST["email"])) {
            $emailError = "Email jest wymagany!";
        } else {
            $email = $_POST["email"];
        }
        if (empty($_POST["strona"])) {
            $stronaError = "Strona jest wymagana!";
        } else {
            $strona = $_POST["strona"];
        }
        if (empty($_POST["miasto"])) {
            $miastoError = "Miasto jest wymagane!";
        } else {
            $miasto = $_POST["miasto"];
        }
    }
    ?>

</head>
<body>
<form action="<?= $_SERVER["PHP_SELF"]?>" method="post">

    <fieldset>
        <legend>Formularz z walidacją</legend>

        <label for="login"> Login: </label>
        <span style="color: red" class="required">* <?=$loginError?></span><br>
        <input type="text" name="login" id="login" value="<?php $login?>"><br><br>


        <label for="email"> Email: </label>
        <span style="color: red" class="required">* <?=$emailError?></span><br>
        <input type="email" name="email" id="email" value="<?php $email?>"> <br><br>

        <label for="strona"> Strona internetowa: </label>
        <span style="color: red" class="required">* <?=$stronaError?></span><br>
        <input type="text" name="strona" id="strona" value="<?php $strona?>"><br><br>

        <label for="miasta"> Wybierz miasto/miasta: </label>
        <span style="color: red" class="required">* <?=$miastoError?></span><br>
        <select name="miasta[]" id="miasta" multiple value="<?php $miasto?>">
            <option value="Warszawa" <?php if ($miasto && strstr(implode('', $miasto), 'Warszawa')) echo 'selected'; ?>
            >Warszawa</option>
            <option value="Poznań" <?php if ($miasto && strstr(implode('', $miasto), 'Poznań')) echo 'selected'; ?>
            >Poznań</option>
            <option value="Gdańsk" <?php if ($miasto && strstr(implode('', $miasto), 'Gdańsk')) echo 'selected'; ?>
            >Gdańsk</option>
            <option value="Szczecin" <?php if ($miasto && strstr(implode('', $miasto), 'Szczecin')) echo 'selected'; ?>
            >Szczecin</option>
        </select> <br><br>
        <label for="plec">Wybierz jedną opcję: </label>
        <span style="color: red" class="required">* <?$plecError?></span><br>
        <label><input type="checkbox" name="plec[]" value="mezczyzna"> mezczyzna </label><br>
        <label><input type="checkbox" name="plec[]" value="kobieta"> kobieta </label><br>
        <label><input type="checkbox" name="plec[]" value="inna"> nie chce podawać</label><br><br>
        <input type="submit" id="submit" value="Wyślij" />
    </fieldset>
</form>
<pre>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    echo print_r($_POST);

}
?>
</pre>

</body>
</html>

