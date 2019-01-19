<?php
$myarray = array(2,6,49,3,2,3,4,50,33,34,37,42,55,234,122);
sort($myarray); //sortiranje od najmanjeg prema najvećem

$arrlength = count($myarray);
foreach($myarray as $i)
{
    if(($i%2) == 0 ){  //izdvajanje samo parnih brojeva
        echo $i;
        echo "<br>";
    }
}

for($i = 0; $i < $arrlength; $i++) {

}

$average_of_myarray = array_sum($myarray) / count($myarray);
echo $average_of_myarray;


?>