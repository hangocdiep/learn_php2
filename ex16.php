<?php 
//16 Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
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