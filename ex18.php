<?php 
// 18 Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function replace($string){
        return preg_replace($string);
}
$str = 'Hello World!';
$pattern = '/World/i';
echo preg_replace($pattern, '!!!!', $str);

?>