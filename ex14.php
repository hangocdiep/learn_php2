<?php 
// 14 Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
function mergeArr($array){
        return implode($array);
                    }
$arr = array('Ha','Diep');
echo implode(" ",$arr)."<br>";

?>