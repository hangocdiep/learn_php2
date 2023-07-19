<?php
    require_once 'pdo.php';
    $cate = new Category();
    $data = ['name' => $_POST['name']];
    $cate->createNewData($data);
    header("Location: http://localhost:8080/bai11/category/index.php");
?>
