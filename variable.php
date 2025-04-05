<?php
    $str = "hello Code";
    $x = 5;
    $y = 7;
    $z = $x + $y;
    echo "string is: $str <br>" ;
    echo $z; 
    

    define("cars","Rollroyce");
    echo "<br> Đây là xe: " . cars;

    //gettype: hàm này trả lại kiểu của 1 biến nào đó
    $a = 30.45;
    echo "<br>" .gettype($a);

    //settype: hàm natf ép kiểu cho 1 biến nào đó. Nếu thành công hàm trả giá trị 1 (true), 0 (false)
    $b = 12.34;
    settype($b, "integer");
    echo "<br> $b";

    //isset và unset: Isset kiểm tra 1 biến đã đc gắn giá trị hay chưa, hàm unset giải phóng bộ nhớ cho 1 biến nào đó
    $c;
    if(isset($c)){
        echo "<br> Đã có giá trị";
        }else{
            echo "<br> Chưa có giá trị";
        }

    //empty: cũng giống hàm isset, hàm empty trả về giá trị 1 (true) nếu 1 biến là rỗng và 0(false) nếu ngược lại
    $b = 2;
    echo "<br>". empty($b);
    echo "<br>". isset($b);





?>