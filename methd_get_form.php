<?php
function show_array($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if(isset($_GET['btn_search'])){
    show_array($_GET);
    $q = $_GET['q'];
    echo $q;
}else{
    echo "Not ok";
}

?>


<html>
    <head>
        <title>Truyền dữ liệu form phương thức GET</title>
    </head>
    <body>
        <h1>Tìm kiếm</h1>
        <form action="" method="GET">
            Tìm kiếm: <input type="text" name="q"><br>
            <input type="submit" name="btn_search" value="Search">
        </form>
    </body>
</html>