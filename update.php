<?php

$servername = "localhost:3307";
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


    $sql = "UPDATE producten SET product_naam = ?, prijs_per_stuk = ?, omschrijving = ? WHERE product_code = 2";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sds", $product_naam, $prijs_per_stuk, $omschrijving);

    if ($stmt->execute()) {
        echo "Productinformatie succesvol bijgewerkt!";
    } else {
        echo "Fout bij het bijwerken van de productinformatie: " . $conn->error;
    }
}


$sql = "SELECT * FROM producten WHERE product_code = 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $huidige_product_naam = $row["product_naam"];
    $huidige_prijs_per_stuk = $row["prijs_per_stuk"];
    $huidige_omschrijving = $row["omschrijving"];
} else {
    echo "Product niet gevonden.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product bijwerken</title>
</head>
<body>
    <h2>Bijwerkingsformulier voor product 2:</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="product_naam">Productnaam:</label>
        <input type="text" name="product_naam" value="<?php echo $huidige_product_naam; ?>" required><br>

        <label for="prijs_per_stuk">Prijs per stuk:</label>
        <input type="number" name="prijs_per_stuk" value="<?php echo $huidige_prijs_per_stuk; ?>" required><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" required><?php echo $huidige_omschrijving; ?></textarea><br>

        <input type="submit" value="Bijwerken">
    </form>
</body>
</html>
