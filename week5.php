<?php

// Opdracht 1
$tijd = date("H:i");

if ($tijd < "12:00") {
    echo "Goedemorgen";
} elseif ($tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}

echo "<br>";

// Opdracht 2
function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2);
    echo "Het gemiddelde is: " . $gemiddelde;
}

berekenGemiddelde(10, 20);

echo "<br>";

// Opdracht 3
function dagenTotNieuwJaar() {
    $huidigeDatum = date_create();
    $eindeJaar = date_create(date("Y")."-12-31");
    $verschil = date_diff($huidigeDatum, $eindeJaar);
    $dagen = $verschil->format("%a");

    return $dagen;
}

echo "Aantal dagen tot nieuwjaar: " . dagenTotEindeJaar();

echo "<br>";

// Opdracht 4
function berekenTotaleLengte($strings) {
    $totaleLengte = 0;
    foreach ($strings as $string) {
        $totaleLengte += strlen($string);
    }
    return $totaleLengte;
}

$array = array("Hallo", "Wereld");
echo "Totale lengte van de strings: " . berekenTotaleLengte($array);

?>
