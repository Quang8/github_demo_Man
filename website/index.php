<?php
$connect = new MySQLi('localhost','root','','apt_mysql1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <section class="wrapper">  
        <header>Header</header>
        <nav>
            <a href="?option=home">Home</a>
            <a href="?option=news">News</a>
            <a href="?option=feedback">Feedback</a>
            <a href="?option=card">Card</a>
            <a href="?option=signin">Signin</a>
            <a href="?option=register">Register</a>
        </nav>
        <section class="body">
            <aside>Left</aside>
            <article>
                <?php
                    if(isset($_GET['option'])){
                        switch($_GET['option']){
                            case'home':
                                include "views/home.php";
                            break;
                            case'signin':
                                include"views/signin.php";
                            break;
                        }
                    }            
                ?>
            </article>
            <aside>Right</aside>
        </section>
        <footer>Footer</footer>
    </section>
</body>
</html>