<?php
if(isset($_POST['login'])){
    $error = array();
    if(empty($_POST['fullname'])){
        $error['fullname'] = "Không được để trống fullname";
    }else{
        $fullname = $_POST['fullname'];
    }
    if(empty($_POST['gender'])){
        $error['gender'] = "Phải chọn giới tính";
    }else{
        $gender = $_POST['gender'];
    }
    if(empty($error)){
        echo "Fullname: $fullname<br> Giới tính: $gender";
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
        <h1>Đăng ký</h1>
        <form action="" method="post">
            <label for="fullname">Fullname</label><br>
            <input type="text" name="fullname" value=""><br>
            <?php if(empty($_POST['fullname'])) echo $error['fullname'] ?><br>
            <label for="">Giới tính</label><br>
            <select name="gender" id="">
                <option value="">--Chọn--</option>
                <option <?php if(!empty($gender)&&$gender == 'male') echo "selected='selected'"; ?> value="male">Nam</option>
                <option <?php if(!empty($gender)&&$gender == 'female') echo "selected='selected'"; ?> value="female">Nữ</option>
            </select><br>
           <?php if(empty($_POST['gender'])) echo $error['gender']  ?>
            <input type="submit" name="login" value="Login">
        </form>
    </body>
</html>