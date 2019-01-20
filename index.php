

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<form method = "POST">
    <input type = "text" name = "numbers" />
    <input type = "submit" name = "submit" value="Pošalji" />    //forma za primanje brojeva putem POST parametra
</form>

</body>

</html>

<?php

$insert = ($_POST['numbers']);

$myArray = explode(',' , $insert);   // primanje brojeva odvojenih zarezom
print_r($myArray);

echo "<br>";

//$myArray = array(2,7,49,3,2,3,4,52,33,34,37,43,55,234,122,320);

sort($myArray); //sortiranje od najmanjeg prema najvećem


$arrLength = count($myArray);

$evenNumber =array();
foreach($myArray as $i)
{
    if(($i%2) == 0 ){  //izdvajanje samo parnih brojeva
        $evenNumber [] = $i;
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
echo "Prvi veći parni broj: " . "<b>",$nextNumber,"</b>","<br />";

echo "<br>";


$tableDimension = sqrt(max($myArray)) +1;

echo "<table border =\"2\" style='border-collapse: collapse'; >";  // izračun dimenzija tablice

$fillTable = 1;
for ($row=0; $row <= $tableDimension; $row++) {
    echo "<tr> \n";
    for ($col=1; $col <= $tableDimension; $col++) {
        if (in_array($fillTable, $evenNumber) && ($fillTable == $nextNumber)) {   //pozicioniranje parnih brojeva u tablicu
            echo  "<td><b>" , $fillTable , "</b></td>";
        } elseif (in_array($fillTable, $evenNumber)) {
            echo "<td>$fillTable</td> \n";
        } else {
            echo '<td style= "width: 20px; height: 20px;">'; '</td>';
        }
        $fillTable++;

    }
    echo "</tr>";
}
echo "</table>";
?>










