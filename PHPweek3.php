<?php

$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];
$myArray[0]  
$myArray[1] 
$myArray[2] 
$myArray[3] 
$myArray[4] 
$myArray[5] 


foreach ($myArray as $value) {
  echo $value . "\n"; 
}

$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];
echo '1. Het array heeft ' . count($myArray) . ' elementen.' . "\n"; 

$myArray[] = 'boot'; 
echo '1. Het array heeft ' . count($myArray) . ' elementen.' . "\n"; 

regel 2 = bar
regel 5 = 4
regel 8 = Toyota
regel 9 = 3
regel 12 = 5
regel 19 = 4

$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];


$gemiddelde = array_sum($cijfersPHP) / count($cijfersPHP);
echo "Gemiddelde is: " . round($gemiddelde, 1);


?>