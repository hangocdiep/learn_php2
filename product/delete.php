<?php
    require_once 'pdo.php';
    $product = new Product(null, null, null);
    $id = ['id' => $_POST['id']];
    $product->deleteProdData($id);
    header("Location: http://localhost:8080/bai11/product/index.php");
?>
