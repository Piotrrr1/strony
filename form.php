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
<form action="form_action.php" method="post">
    <fieldset>
        <legend>Formularz Prosty</legend>

        <label for="Login">Login:</label>
        <input type="text" name="Login" id="Login"> <br><br>

        <label for=c"haslo">Hasło</label>
        <input type="password" name="Hasło" id="haslo"> <br><br>

        <label for="Email">Email</label>
        <input type="Email" name="Email" id="Email"> <br><br>

        <label for="Data">Data</label>
        <input type="Date" name="Data" id="Data"> <br><br>


        <input type="submit" name="Wyślij">
    </fieldset>
    <fieldset>
        <legend>Formularz do ogarnięcia</legend>
        <br>
        <label for="Auta">Wybierz samochód</label>
        <select name="Auta" id="Auta">
            <option value="BMW">Volvo</option>
            <option value="Volvo">BMW</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Toyota">Toyota</option>
            <br><br>
        </select>
        <label for="Produkcja">Rok i miesiąc produkcji</label>
        <input type="date" name="data" id="Data">
        <br><br>

        <label for="Sedan">Sedan</label>
        <input type="radio" id="Sedan" name="Sedan" value="Sedan">

        <label for="Kombi">Kombi</label>
        <input type="radio" id="Kombi" name="Kombi" value="Kombi">

        <label for="SUV">SUV</label>
        <input type="radio" id="SUV" name="SUV" value="SUV">

        <label for="1">Nie mam samochodu</label>
        <input type="checkbox" id="1" name="1" value="Nie mam">
    </fieldset>
</form>
</body>
