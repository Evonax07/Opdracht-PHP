<!DOCTYPE html>
<html>
<head>
    <title>GET-formulier</title>
</head>
<body>
    <form method="get" action="get.php">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam" required>

        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" id="achternaam" required>

        <label for="leeftijd">Leeftijd:</label>
        <input type="number" name="leeftijd" id="leeftijd" required>

        <label for="adres">Adres:</label>
        <input type="text" name="adres" id="adres" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Verzenden</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (!empty($_GET['naam']) && !empty($_GET['achternaam']) && !empty($_GET['leeftijd']) && !empty($_GET['adres']) && !empty($_GET['email'])) {
            $naam = $_GET['naam'];
            $achternaam = $_GET['achternaam'];
            $leeftijd = $_GET['leeftijd'];
            $adres = $_GET['adres'];
            $email = $_GET['email'];

            echo "<h2>Ingevoerde gegevens:</h2>";
            echo "Naam: $naam <br>";
            echo "Achternaam: $achternaam <br>";
            echo "Leeftijd: $leeftijd <br>";
            echo "Adres: $adres <br>";
            echo "Email: $email <br>";
        }
    }
    ?>
</body>
</html>
