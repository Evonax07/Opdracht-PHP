<?php
$servername = "localhost:3307'";
$username = "root";
$password = "";
$dbname = "winkel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_naam = $_POST["product_naam"];
    $prijs_per_stuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];


    $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES ('$product_naam', '$prijs_per_stuk', '$omschrijving')";

    if ($conn->query($sql) === TRUE) {
        echo "Product succesvol toegevoegd!";
    } else {
        echo "Fout bij het toevoegen van het product: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product toevoegen</title>
</head>
<body>
    <h2>Voeg een nieuw product toe:</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="product_naam">Productnaam:</label>
        <input type="text" name="product_naam" required><br>

        <label for="prijs_per_stuk">Prijs per stuk:</label>
        <input type="number" name="prijs_per_stuk" required><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" required></textarea><br>

        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>
