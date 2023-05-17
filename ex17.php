<?php 
// 17 Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function testString($string){
        return strpos($string);
        }
$str = "HaDiep";
$sub = "Ha";
if (strpos($str, $sub) !== false) {
    echo 'Ton tai';
    } else {
    echo 'Khong ton tai';
    }

?>