<?php

//Opdracht 1
for ($i = 0; $i <= 50; $i++) {
    echo $i . "<br />";
}

//Opdracht 2
$namen = [
    "Jan",
    "Piet",
    "Klaas",
    "Annie",
    "Erik",
    "Linda",
    "Sandra",
    "Bram",
    "Marieke",
    "Tom"
];

foreach ($namen as $naam) {
    echo $naam . "<br />";
}

//Opdracht 3
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

$maandCount = count($maanden);

for ($i = 0; $i < $maandCount; $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';
}

//Opdracht 4
foreach ($maanden as $index => $maand) {
    echo 'Maand ' . ($index + 1) . ' is ' . $maand . '.<br />';
}

?>
