<?php
session_start();

if(isset($_SESSION['useremail'])){
    header('Location: shopbox.php');
}else{
    //$message = "請先登入會員";
    //echo "<script type='text/javascript'>alert('$message');</script>";
    header('Location: login.php');
}
?>