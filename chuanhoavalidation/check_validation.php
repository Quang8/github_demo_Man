<?php
require 'validation.php';
if(isset($_POST['login'])){
    $error = array();
    if(empty($_POST['username'])){
        $error['username'] = "Không được để trống username";
    }else{
        if(!(strlen($_POST['username']) >=6 && strlen($_POST['username']) <=32)){
            $error['username'] = "Username yêu cầu từ 6 đến 32 ký tự";
        }else{

            if(!is_username($_POST['username'])){
                $error['username'] = "Username cho phép sử dụng ký tự, chữ số, dấu chấm, dấu gạch dưới, từ 6 đến 32 ký tự";
            }else{
                $username = $_POST['username'];
                echo $username;
            }
        }      
    }
    if(empty($_POST['password'])){
        $error['password'] = "Không được để trống password";
    }else{
        if(!(strlen($_POST['password']) >=6 && strlen($_POST['password']) <=32 )){
            $error['password'] = "Password yêu cầu từ 6 đến 32 ký tự";
        }else{
            if(!is_password($_POST['password'])){
                $error['password'] = "Password cho phép sử dụng chữ cái, số, ký tự đặc biệt, bắt đầu ký tự viết hoa và có 6 đến 32 ký tự";
            }else{
                $password = $_POST['password'];
            }
        }
    }
    if(empty($error)){
        echo "Username: $username<br> Password: $password";
    }
}

?>

<html>
    <head>
        <title>Chuẩn hoá dữ liệu form đăng nhập</title>
    </head>
    <body>
        <style>
            p.error{color:red};
        </style>
        <h1>Đăng nhập</h1>
        <form action="" method="post">
            <label for="">Username</label><br>
            <input type="text" name="username" value="<?php if(empty($error['username'])) echo $username ?>"><br>
            <p class="error"><?php if(!empty($error['username']))echo $error['username']; ?></p><br>
            <label for="">Password</label><br>
            <input type="password" name="password" id="password"><br>
            <p class="error"><?php if(!empty($error['password']))echo $error['password']; ?></p><br>
            <input type="submit" name="login" value="Login">
        </form>
    </body>
</html>