<?php 
// 20 Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
function checkMail($string){
    return filter_var($string);
}
$email = $string = "hadieptubemi@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo("$email is a valid email address");
} else {
echo("$email is not a valid email address");
}

?>