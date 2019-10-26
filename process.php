<?php

$mysqli = new mysqli('localhost', 'root', '', 'yah') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
    $name = $_POST['pro_name'];
    $url = $_POST['pro_url'];
    $text = $_POST['pro_text'];
    $price = $_POST['price'];

    
    $mysqli->query("INSERT INTO product (pro_id,pro_name,pro_url,pro_text,price) VALUES( null,'$name', '$url', '$text','$price') ") or die($mysqli->error);
    $_SESSION['message'] = "產品已儲存";
    $_SESSION['msg_type'] = "成功";
    header("location: edit-product.php");
}