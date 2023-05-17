<?php 
// 13 Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
    function separateString($string){
        return explode($string);
                    }
    $str = "Ha Diep";
    print_r (explode(" ",$str));

?>