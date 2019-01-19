
<?php
$myArray = array(2,6,49,3,2,3,4,50,33,34,37,42,55,234,122);

sort($myArray); //sortiranje od najmanjeg prema najvećem


$arrLength = count($myArray);
foreach($myArray as $i)
{
    if(($i%2) == 0 ){  //izdvajanje samo parnih brojeva
        echo $i;
        echo "<br>";
    }
}


$averageOfMyArray = array_sum($myArray) / count($myArray); //izračun aritmetičke sredine

echo "Aritmetička sredina: " . $averageOfMyArray;
echo "<br>";

$nextNumber = null;
foreach ($myArray as $key => $value) {
    if ($value >= $averageOfMyArray && $value % 2 === 0) {  //izračun prvog većeg parnog broja od aritmetičke sredine
        $nextNumber = $value;
        break;
    }
}
echo "Prvi veći parni broj: " . $nextNumber, "<br />";

echo sqrt(sqrt(2));

?>

