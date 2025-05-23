<?php

//XXX Declaration
$grade1 = 80;
$grade2 = 90;
$grade3 = 70;

echo "Welcome! ";
echo "________<br><br>";
echo "I'm trying to find the average grades<br><br>";

//math equation to find the average
echo "The Sum is: ";
echo $sum = $grade1 + $grade2 + $grade3;
echo "<br>";
echo "The Average is: ";
echo $average = $sum / 3;

echo "<br><br>";
//XXX Conditional
$holder = true;
$empty = false;

if ($holder) {
    echo "You may pass<br><br>";

    $num = 8;
    for ($i = 1; $i < $num; $i++) {
        echo "Welcome to " . $i;
        if ($i == ($num - 1)) {
            echo " stars";
        }
        echo "<br>";
    }

    echo "<br>";

    //XXX Array / Loop of For Each
    $arrayTo = ["x", "y", "z"];

    //XXX Data Structure
    $thePerson = (object) [
        "name" => "Lali",
        "age" => "19",
    ];

    foreach ($arrayTo as $key => $value) {
        echo "Key: " . $key . " - Value: " . $value . "<br>";
    }

    echo "<br>";

    foreach ($thePerson as $key => $value) {
        echo "Key: " . $key . " Value: " . $value . "<br>";
    }

    echo "<h1>" . $thePerson->name . "</h1>";

} else {
    echo "You cannot pass change to holder<br><br>";
}

?>

<a href="./Pages/index.php">Click to go to the 2nd Page</a>