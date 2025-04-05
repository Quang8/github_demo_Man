
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $a = (double)$_POST['a'];
    $b = (double)$_POST['b'];
    $c = (double)$_POST['c'];
    echo "<br>$a";
    echo "<br>$b";
    echo "<br>$c";
    $latamgiac=0;
    //
    if ($a+$b>$c && $a+$c>$b && $b+$c>$a){
        $latamgiac=1;
        echo"<br>$a, $b, $c là 3 cạnh của 1 tam giác";
    }else{
        echo"<br>$a, $b, $c không phải là 3 cạnh của 1 tam giác";
    }
    if($latamgiac=1 && ($a==$b || $b==$c || $a==$c)){
        echo"<br> đây là tam giác cân";
    }else{
        echo"<br> đây không phải là tam giác cân";
    }
    //
    if ($latamgiac=1 && ($a==$b && $a==$c)){
        echo"<br> đây là tam giác đều";
    }else{
        echo"<br> đây không phải là tam giác đều";
    }
?>

<section>
        <form action="" method="post">
            <section>
                <label for="">Nhập a: </label>
                <input type="number" name="a" step="0.00001" required>
            </section>
            <section>
                <label for="">Nhập b: </label>
                <input type="number" name="b" step="0.00001" required>
            </section>
            <section>
                <label for="">Nhập c: </label>
                <input type="number" name="c" step="0.00001" required>
            </section>
            <section>
                <input type="submit" value="Check">
            </section>
        </form>
    </section>

</body>
</html>