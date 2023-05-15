<!DOCTYPE html>
<html>
<head>
    <title>Formulier</title>
</head>
<body>
    <?php
    $variabele1 = 10;
    $variabele2 = 10;

    if ($variabele1 == $variabele2) {
        echo "De twee waarden zijn gelijk";
    } else {
        echo "De twee waarden zijn ongelijk";
    }
    ?>

    <form method="post" action="">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" name="username" id="username">

        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password">

        <button type="submit">Verzenden</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "Ingevoerde gebruikersnaam: $username <br>";
        echo "Ingevoerd wachtwoord: $password";
    }
    ?>
</body>
</html>
