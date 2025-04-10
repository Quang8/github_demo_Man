<?php
function demo(){
    echo "<br> the first function";
}
demo();
//
function tinhtong($a, $b){
    echo "<br>$a + $b = " .($a+$b);
}
tinhtong(10,20);
//
function tinhbietthuc($a,$b,$c){
    $d = $b*$b - 4*$a*$c;
    return $d;
}
echo "<br>" .tinhbietthuc(1,3,2);
//
function tinhhieu($a,$b=0){
    echo "<br> $a - $b = ". ($a - $b);
}
tinhhieu(10,20);
tinhhieu(10);

?>