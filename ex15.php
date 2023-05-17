<?php 
//15 Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
function addString($string){
    return str_pad($string);
    }
$str = "Ha Diep";
echo str_pad($str,19,"Ngoc");

?>