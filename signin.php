<?php
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "select*from member where username ='$username' and password ='$password'";
    $result = $connect->query($query);
    if(mysqli_num_rows($result)==0){
        $alert = "Sai tên đăng nhập hoặc mật khẩu";
    }else{
        $result=mysqli_fetch_array($result);
        if($result['status']==0){
            $alert="Tài khoản của bạn đang bị khoá hoặc đang trong quá trình xử lí";
        }else{
            header("location: ?option=home");
        }
    }
}
?>

<section>
    <h1>Đăng nhập tài khoản</h1>
    <section><?=isset($alert)?$alert:""?>
        <form action="" method="post">
            <section>
                <label for="">Username: </label>
                <input type="text" name="username">
            </section>
            <section>
                <label for="">Password: </label>
                <input type="text" name="password">
            </section>
            <section>
                <input type="submit" value="Đăng nhập">
            </section>
        </form>
    </section>
</section>