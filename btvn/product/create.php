<?php
    require_once 'pdo.php';
    $product = new Product(null, null, null);
    $data = [
        'prodId' => '',
        'prodName' => $_POST['name'],
        'prodPrice' => $_POST['price'],
        'cateId' => $_POST['cateId']
    ];
    $product->createNewProdData($data);
    header("Location: http://localhost:8080/bai11/product/index.php");
?>
