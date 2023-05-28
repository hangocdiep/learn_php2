<?php 
//1 Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
        // function test($number) {
        //     if($number % 2 == 0) {
        //     return true;
        //     } else {
        //     return false;
        //     }
        // }
        // $number = 4;
        // if(test($number)) {
        // echo $number . ' là số chẵn';
        // } else {
        // echo $number . ' không phải là số chẵn';
        // }

//2 Viết chương trình PHP để tính tổng của các số từ 1 đến n.
                // function sum($n) {
                //         $total = 0;
                //         for($i = 1; $i <= $n; $i++) {
                //         $total += $i;
                //         }
                //         return $total;
                // }
                // $n = 15;
                // $result = sum($n);
                // echo 'Tổng của các số từ 1 đến ' . $n . ' là: ' . $result;
//3 Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.

                // for($i = 1; $i <= 10; $i++) {
                //         echo "Bảng cửu chương $i: <br>";
                //         for($j = 1; $j <= 10; $j++) {
                //           echo "$i x $j = " . ($i * $j) . "<br>";
                //         }
                //       }
//4 Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.

                // function checkString($string, $word) {
                //         if(strpos($string, $word) !== false) {
                //         return true;
                //         } else {
                //         return false;
                //         }
                // }
                // $string = "Ha Ngoc Diep";
                // $word = "Diep";
                // if(checkString($string, $word)) {
                //         echo "Chuỗi '$string' chứa từ '$word'";
                // } else {
                //         echo "Chuỗi '$string' không chứa từ '$word'";
                // }
//5 Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
                // Hàm tìm giá trị lớn nhất trong mảng
                // function findMax($arr) {
                //         $max = $arr[0];
                //         foreach($arr as $value) {
                //         if($value > $max) {
                //         $max = $value;
                //         }
                //         }
                //         return $max;
                // }
                // // Hàm tìm giá trị nhỏ nhất trong mảng
                // function findMin($arr) {
                //         $min = $arr[0];
                //         foreach($arr as $value) {
                //         if($value < $min) {
                //         $min = $value;
                //         }
                //         }
                //         return $min;
                // }
                // // Sử dụng hàm tìm giá trị lớn nhất và nhỏ nhất
                // $numbers = [5,9,66,45,89];
                // $max = findMax($numbers);
                // $min = findMin($numbers);
                
                // echo "Giá trị lớn nhất trong mảng là: $max <>";
                // echo "Giá trị nhỏ nhất trong mảng là: $min";
// 6Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
                // $numbers = array(5, 3, 4, 9, 6);
                // sort($numbers);
                // foreach ($numbers as $number) {
                // echo $number . " ";
                // }
// 7Viết chương trình PHP để tính giai thừa của một số nguyên dương.
                // function factorial($n) {
                //         if ($n == 0) {
                //           return 1;
                //         } else {
                //           return $n * factorial($n - 1);
                //         }
                //       }
                //       $n = 6;
                //       echo "Giai thừa của $n là: " . factorial($n);
      
// 8Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
                // function isPrime($n) {
                //         if ($n <= 1) {
                //         return false;
                //         }
                //         for ($i = 2; $i <= sqrt($n); $i++) {
                //         if ($n % $i == 0) {
                //                 return false;
                //         }
                //         }
                //         return true;
                // }
                
                // function findPrimes($start, $end) {
                //         $primes = array();
                //         for ($i = $start; $i <= $end; $i++) {
                //         if (isPrime($i)) {
                //                 $primes[] = $i;
                //         }
                //         }
                //         return $primes;
                // }
                // $start = 1;
                // $end = 50;
                // $primes = findPrimes($start, $end);
                // echo "Các số nguyên tố trong khoảng từ $start đến $end là: " . implode(", ", $primes);
//9 Viết chương trình PHP để tính tổng của các số trong một mảng.
                // // Mảng chứa các số cần tính tổng
                // $numbers = array(1, 2, 3, 4, 5);

                // // Tí tổng của các số trong mảng
                // $sum = 0;
                // foreach ($numbers as $number) {
                // $sum += $number;
                // }
                // // In kết quả ra màn hình
                // echo "Tổng của các số trong mảng là: $sum";
// Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
                // function fibonacci($n) {
                //     if ($n <= 1) {
                //         return $n;
                //     } else {
                //         return fibonacci($n - 1) + fibonacci($n - 2);
                //     }
                // }

                // $start = 1; // giá trị bắt đầu của khoảng
                // $end = 10; // giá trị kết thúc của khoảng

                // for ($i = $start; $i <= $end; $i++) {
                //     echo(fibonacci($i) . " ");
                // }

// Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
            // function isArmstrong($number) {
            //     $sum = 0;
            //     $temp = $number;
            //     $numDigits = strlen($number);
            //     while ($temp != 0) {
            //     $remainder = $temp % 10;
            //     $sum += pow($remainder, $numDigits);
            //     $temp = intval($temp / 10);
            //     }
            //     if ($sum == $number) {
            //     return true;
            //     } else {
            //     return false;
            //     }
            // }
            
            // $number = 153;
            // if (isArmstrong($number)) {
            //     echo "$number là số Armstrong";
            // } else {
            //     echo "$number không phải là số Armstrong";
            // }
 
// Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
            // // Mảng ban đầu
            // $originalArray = array(1, 2, 3, 4, 5);

            // // Chèn số 10 vào mảng ở vị trí thứ 2
            // $insertedNumber = 10;
            // $insertIndex = 2;

            // // Sử dụng hàm array_splice() để chèn phần tử vào mảng
            // array_splice($originalArray, $insertIndex, 0, $insertedNumber);

            // // In ra mảng mới
            // print_r($originalArray);

// Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
            // $arr = array("1", "2", "3", "4", "5", "4", "2", "1");
            
            // $len = count($arr);
            // echo "gia tri trung lap la <br>";
            // for ($i = 0; $i < $len; $i++) {
            // $temp = $arr[$i];
            // $j = $i;
            
            // for ($k = 0; $k < $len; $k++) {
            //     if ($k != $j) {
            //     if ($temp == $arr[$k]) {
            //         echo $temp."<br> ";
            //         $arr[$k]=" ";
            //     }
            //     }
            // }
            // }
            // echo "mang sau khi loai la <br>";
            // for ($i = 0; $i < $len; $i++) {
            // echo $arr[$i] . "  <br><br>";
            // }
// Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
            // Mảng số nguyên ban đầu
            // $numbers = array(2, 6, 3, 8, 5, 9, 3);

            // // Tìm vị trí của số 5 trong mảng
            // $searchedNumber = 5;
            // $position = array_search($searchedNumber, $numbers);
            // if ($position !== false) {
            //     echo "Vị trí của số $searchedNumber trong mảng là: $position";
            // } else {
            //     echo "Không tìm thấy số $searchedNumber trong mảng";
            // }

// Viết chương trình PHP để đảo ngược một chuỗi.

                //     function reverseString($str){
                //         $length = strlen($str);
                //         $result = '';
                //         for ($i = $length - 1; $i >= 0; $i--) {
                //             $result .= $str[$i];
                //         }
                //         return $result;
                //     }

                //     // Sử dụng hàm để đảo ngược chuỗi
                //     $string = "Hello World";
                //     $reverseString = reverseString($string);

                //     echo "Chuỗi ban đầu: " . $string . "<br>";
                //     echo "Chuỗi đảo ngược: " . $reverseString;


// Viết chương trình PHP để tính số lượng phần tử trong một mảng.
                // $array = array("apple", "banana", "orange", "grape", "kiwi");

                // // Sử dụng hàm count() để tính số lượng phần tử trong mảng
                // $count = count($array);

                // echo "Số lượng phần tử trong mảng: " . $count;
// Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.

                // function isPalindrome($str){
                //         $str = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str)); // xóa các ký tự không phải chữ cái và số, và chuyển tất cả thành chữ thường
                //         $reverseStr = strrev($str); // đảo ngược chuỗi
                //         if($str == $reverseStr){ // so sánh chuỗi ban đầu và chuỗi đảo ngược
                //         return true;
                //         } else {
                //         return false;
                //         }
                // }

                // // Sử dụng hàm để kiểm tra chuỗi Palindrome
                // $string1 = "A man a plan a canal Panama";
                // $isPalindrome1 = isPalindrome($string1);

                // $string2 = "Hello World";
                // $isPalindrome2 = isPalindrome($string2);

                // echo "Chuỗi 1 là Palindrome: " . $isPalindrome1 . "<>";
                // echo "Chuỗi 2 là Palindrome: " . $isPalindrome2;


// Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.

                // $array = array("apple", "banana", "orange", "ape", "kiwi", "banana");

                // // Sử dụng hàm array_count_values() để đếm số lần xuất hiện của từng phần tử trong mảng
                // $countValues = array_count_values($array);

                // // Sử dụng hàm isset() để kiểm tra xem phần tử có tồn tại trong mảng hay không
                // if(isset($countValues["banana"])){
                //         echo "Số lần xuất hiện của phần tử 'banana': " . $countValues["banana"];
                // } else {
                //         echo "Phần tử 'banana' không tồn tại trong mảng";
                // }


// Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
                        // $array = array(3, 2, 8, 6, 1, 9, 4);

                        // // Sử dụng hàm rsort() để sắp xếp mảng theo thứ tự giảm dần
                        // rsort($array);

                        // // In mảng đã được sắp xếp
                        // echo "Mảng đã được sắp xếp theo thứ tự giảm dần: ";
                        // foreach ($array as $value) {
                        //         echo $value . " ";
                        // }

// Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.

                // $array = array("apple", "banana", "orange");

                // // Thêm một phần tử vào đầu mảng bằng hàm array_unshift()
                // array_unshift($array, "kiwi");

                // // Thêm một phần tử vào cuối mảng bằng hàm array_push()
                // array_push($array, "grape");

                // // In mảng sau khi đã thêm phần tử
                // echo "Mảng sau khi đã thêm phần tử vào đầu và cuối: ";
                // foreach ($array as $value) {
                //         echo $value . " ";
                // }

// Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
                //     $array = array(2, 3, 8, 6, 1, 9, 4);

                //     // Sắp xếp mảng theo thứ tự giảm dần bằng hàm rsort()
                //     rsort($array);

                //     // In ra số lớn thứ hai
                //     echo "Số lớn thứ hai trong mảng: " . $array[1];

// Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
                // function findGCD($num1, $num2){
                //         // Sử dụng thuật toán Euclid để tìm ước số chung lớn nhất
                //         while($num2 != 0){
                //         $temp = $num1 % $num2;
                //         $num1 = $num2;
                //         $num2 = $temp;
                //         }
                //         return $num1;
                // }

                // function findLCM($num1, $num2){
                //         // Sử dụng công thức để tính bội số chung nhỏ nhất từ ước số chung lớn nhất
                //         $gcd = findGCD($num1, $num2);
                //         $lcm = ($num1 * $num2) / $gcd;
                //         return $lcm;
                // }

                // // Sử dụng hàm để tìm ước số chung lớn nhất
                // $num1 = 24;
                // $num2 = 36;
                // $gcd = findGCD($num1, $num2);

                // echo "Ước số chung lớn nhất của " . $num1 . " và " . $num2 . " là: " . $gcd . "<>";

                // // Sử dụng hàm để tìm bội số chung nhỏ nhất
                // $lcm = findLCM($num1, $num2);

                // echo "Bội số chung nhỏ nhất của " . $num1 . " và " . $num2 . " là: " . $cm;

// Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
                //     function isPerfectNumber($number){
                //         $sum = 0;

                //         // Tìm các ước của số đó bằng vòng lặp for
                //         for($i=1; $i<$number; $i++){
                //             ifnumber % $i == 0){
                //                 $sum += $i;
                //             }
                //         }

                //         // Kiểm tra số đó có phải là số hoàn hảo hay không
                //         if($sum == $number){
                //             return true;
                //         } else {
                //             return false;
                //         }
                //     }

                //     // Kiểm tra số 28 có phải là số hoàn hảo không
                //     if(isPerfectNumber(28)){
                //         echo "28 là số hoàn hảo";
                //     } else {
                //         echo "28 không phải là số hoàn hảo";
                //     }

// Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.

                //     $array = array(1, 5, 3, 7, 2, 6, 4);

                //     // Sử dụ hàm rsort() để sắp xếp mảng theo thứ tự giảm dần
                //     rsort($array);

                //     foreach ($array as $value) {
                //         // Kiểm tra nếu số đó là số lẻ thì in ra và dừng vòng lặp
                //         if($value % 2 != 0){
                //             echo "Số lẻ lớn nhất trong mảng là: " . $value;
                //             break;
                //         }
                //     }


// Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
                // function isPrimeNumber($number){
                //         if($number <= 1){
                //         return false;
                //         }

                //         // Sử dụng vòng lặp for để kiểm tra số đó có phải là số nguyên tố hay không
                //         for($i=2; $i<=sqrt($number); $i++){
                //         if($number % $i == 0){
                //                 return false;
                //         }
                //         }
                //         return true;
                // }

                // // Kiểm tra số 11 có phải là số nguyên tố không
                // if(isPrimeNumber(11)){
                //         echo "11 là số nguyên tố";
                // } else {
                //         echo "11 không phải là số nguyên tố";
                // }

// Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
                // $array = array(-2, 3, 4, -1, 8, -5, 6);

                // // Sử dụng hàm max() để tìm giá trị lớn nhất trong mảng
                // $max = max($array);

                // // Kiểm tra xem giá trị lớn nhất có phải là số dương hay không
                // if($max > 0){
                //         echo "Số dương lớn nhất trong mảng là: " . $max;
                // } else {
                //         echo "Không tìm thấy số dương trong mảng";
                // }

// Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
                // $array = array(-2, 3, 4, -1, 8, -5, 6);

                // // Sử dụng hàm max() để tìm giá trị lớn nhất trong mảng
                // $max = max($array);

                // // Sử dụng vòng lặp foreach để lọc ra giá trị âm lớn nhất trong mảng
                // $negativeMax = null;
                // foreach ($array as $value) {
                //         if($value <0 && $value > $negativeMax){
                //         $negativeMax = $value;
                //         }
                // }

                // // Kiểm tra xem giá trị âm lớn nhất có tồn tại hay không
                // if($negativeMax != null){
                //         echo "Số âm lớn nhất trong mảng là: " . $negativeMax;
                // } else {
                //         echo "Không tìm thấy số âm trong mảng";
                // }

// Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
                //     function sumOfOddNumbers($n){
                //         $sum = 0;

                //         // Sử dụng vòng lặp for để tính tổng các số lẻ từ 1 đến n
                //         for($i=1; $i<=$n; $i++){
                //             if($i%2 != 0){
                //                 $sum += $i;
                //             }
                //         }
                //         return $sum;
                //     }

                //     // Tính tổng các số lẻ từ 1 đến 10
                //     echo "Tổng các số lẻ từ 1 đến 10 là: " . sumOfOddNumbers(10);

// Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
    function findPerfectSquare($start, $end){
        $result = array();

        // Sử dụng vòng lặp for để kiểm tra từng số trong khoảng
        for($i=$start; $i<=$end; $i++){
            $sqrt = sqrt($i);

            // Kiểm tra số đó có phải là số chính phương hay không
            if(($sqrt*$sqrt) == $i){
                array_push($result, $i);
            }
        }
        return $result;
    }

    // Tìm số chính phương trong khoảng từ 1 đến 20
    $perfectSquares = findPerfectSquare(1, 20);

    echo "Các số chính phương trong khoảng từ 1 đến 20 là: " . implode(", ", $perfectSquares);

// Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
                //     function checkSubstring($string, $substring){
                //         $stringLength = strlen($string);
                //         $substringLength = strlen($substring);
                        
                //         // Sử dụng vòng lặp for để kiểm tra từng ký tự trong chuỗi
                //         for($i=0; $i<stringLength-$substringLength); $i++){
                //             $j = 0;

                //             // So sánh từng ký tự trong chuỗi con và chuỗi ban đầu
                //             while($j <substringLength && $string[$i+$j] == $substring[$j]){
                //                 $j++;
                //             }

                //             // Nếu độ dài của chuỗi con bằng với số ký tự so sánh được thì đó là chuỗi con
                //             if($j == $substringLength){
                //                 return true;
                //             }
                //         }
                //         return false;
                //     }

                //     // Kiểm tra xem "def" có phải là chuỗi con của "abcdefgh" hay không
                //     if(checkSubstring("abcdefgh", "def")){
                //         echo "Chuỗi 'def' là chuỗi con của chuỗi 'abcdefgh'";
                //     } else {
                //         echo "Chuỗi 'def' không phải là chuỗi con của chuỗi 'abcdefgh'";
                //     }


?>


 