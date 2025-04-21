<?php
function show_array($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if(isset($_POST['btn_login'])){
    $info_user = array(
        'username' => 'admin',
        'password' => '12345',
    );
    $error = array(); 
    if(empty($_POST['username'])){
        $error['username'] = "Không được để trống tên đăng nhập";
    }else{
        $username = $_POST['username'];
    }
    if(empty($_POST['password'])){
        $error['password'] = "Không được để trống mật khẩu";
    }else{
        $password = $_POST['password'];
    }
    if(empty($error)){
        if(($username == $info_user['username']) && $password == $info_user['password']){
            $redirect_to = $_POST['redirect_to'];
            echo $redirect_to;
        }else{
            show_array($error);
        }
    }
}
?>

<html>
    <head>
        <title>Nhận dữ liệu từ hidden field form</title>
    </head>
    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="post">
            Name: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="hidden" name="redirect_to" value="home.php">
            <input type="submit" name="btn_login" value="Log in">
        </form>
    </body>
</html>