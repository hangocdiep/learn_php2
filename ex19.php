<?php 
// 19 Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
function testInt($int){
        return is_int($int);
}
$a = 32;
if (is_int($a) ==! false){
echo "a là " . is_int($a) . "<br>";}
$b = 3.2;
if (is_int($b) ==! false){
echo "b là " . is_int($b) . "<br>";}
$c= 3;
if (is_int($c) ==! false){
echo "c là " . is_int($c) . "<br>";}

?>