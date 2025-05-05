<?php
function get_header(){
    $path_header = "header.php";
    if (file_exists($path_header))
        require $path_header;
    else{
        echo "Không tồn tại đường dẫn {$path_header}";
    }
}    

?>

<?php
$page = !empty($_GET['page'])?$_GET['page']:'home';

$path = "pages/{$page}.php";
echo $path;
if(file_exists($path)){
    require $path;
}else{
    echo "Ko tồn tại trang này";
}

?>


<?php
require 'footer.php';

?>

