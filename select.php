<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "winkel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

 // Deel 1
echo "<h2>Alle producten:</h2>";


$sql = "SELECT * FROM producten";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["product_naam"] . " - Prijs: " . $row["prijs_per_stuk"] . " - Omschrijving: " . $row["omschrijving"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Geen producten gevonden.";
}

// Deel 2
echo "<h2>Product met product_code 1:</h2>";


$sql = "SELECT * FROM producten WHERE product_code = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_code);
$product_code = 1;
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Productnaam: " . $row["product_naam"] . " - Prijs: " . $row["prijs_per_stuk"] . " - Omschrijving: " . $row["omschrijving"];
    }
} else {
    echo "Product niet gevonden.";
}

// Deel 3
echo "<h2>Product met product_code 2:</h2>";


$sql = "SELECT * FROM producten WHERE product_code = :product_code";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":product_code", $product_code);
$product_code = 2;
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Productnaam: " . $row["product_naam"] . " - Prijs: " . $row["prijs_per_stuk"] . " - Omschrijving: " . $row["omschrijving"];
    }
} else {
    echo "Product niet gevonden.";
}

$conn->close();
?>
