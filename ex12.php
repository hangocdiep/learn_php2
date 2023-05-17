<?php
// 12 Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function deleteString($string){
return rtrim($string);
}
$str = "Hello World!";
echo rtrim($str,"World!");


?>