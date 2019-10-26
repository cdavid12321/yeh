<?php

session_start();

$check = $_GET['pay'];

if($check == "credit"){
    $_SESSION['payid'] = 1;
    $_SESSION['pay_name']="線上刷卡";
}
if($check == "deli_pay"){
    $_SESSION['payid'] = 2;
    $_SESSION['pay_name']="貨到付款";
}
if($check == "line_pay"){
    $_SESSION['payid'] = 3;
    $_SESSION['pay_name']="Line Pay";
}
if($check == "google_pay"){
    $_SESSION['payid'] = 4;
    $_SESSION['pay_name']="Google Pay";
}
if($check == "atm"){
    $_SESSION['payid'] = 5;
    $_SESSION['pay_name']="ATM 轉帳";
}
header("Location:shopbox.php");

?>