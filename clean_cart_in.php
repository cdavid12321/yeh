<?php
//刪除購物車session中的東西
session_start();
//判斷是否刪除一個商品 還是清空
unset($_SESSION['shoplist']);
//跳轉

header("location:index.php");
?>