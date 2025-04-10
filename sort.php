<?php
//sort vs rsort;
$subjects = array("a", "c","b","d","e");
sort($subjects);
//var_dump($subjects);
foreach($subjects as $value){
    echo "<br>$value";
}
    echo "<br>";
//asort vs arsort;
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $key => $value) {
  echo "$key => $value";
  echo "<br>";
}
  echo "<br>";
//ksort vs krsort;
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

?>