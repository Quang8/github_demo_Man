<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// 1.
    $N = $_POST['number'];
    echo $N;
// 2.
    if($N == (int)$N){
        echo "<br> $N là số nguyên";
    }else{
        echo "<br> $N không phải là số nguyên";
    }
//
    if($N == (int)$N){
        if($N%2 ==0){
            echo"<br>$N là số chẵn";
        }else{
            echo"<br>$N là số lẻ";
        }
    }

?>

    <section>
        <form action="" method="post">
            <section>
                <label for="">Nhập 1 số bất kì: </label>
                <input type="number" name="number" step="0.00001" required>
            </section>
            <section>
                <input type="submit" value="Check">
            </section>
        </form>
    </section>
</body>
</html>