<?php



$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear","b" => "strawberry","c" => "cherry");

$c = $a + $b; // Gộp $a và $b
echo "Union of \$a and \$b: <br>";
var_dump($c);

$c = $b + $a; // Gộp $b và $a
echo "Union of \$b and \$a: <br>";
var_dump($c);

$a += $b; // Gộp $a += $b là $a và $b
echo "Union of \$a += \$b: <br>";
var_dump($a);




?>



