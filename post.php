<!DOCTYPE html>
<html>
<head>
    <title>POST-formulier</title>
</head>
<body>
    <form method="post" action="post.php">
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
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['naam']) && !empty($_POST['achternaam']) && !empty($_POST['leeftijd']) && !empty($_POST['adres'])
