<?php
// 11 Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
    function deleteString($string){
            return ltrim($string);
            }
    $str = "Hello World!";
    echo ltrim($str,"Hello");

?>