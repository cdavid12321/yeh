<?php
session_start();
$member_id = $_POST['member_id'];
$total_price = $_POST['total_price'];
$db = mysqli_connect('localhost','root','','yah') or die("無法連線資料庫");
$deliver_id = $_SESSION['deli_id'];
$pay_id = $_SESSION['payid'];
$datetime = new DateTime();
$timezone = new DateTimeZone('Asia/Taipei');
$datetime->setTimezone($timezone);
$datetim = date_format($datetime, 'Y-m-d H:i:s');
$insert_order = "INSERT INTO order_info (mem_id, order_time, pay_id, delivery_id, order_total) VALUES ('$member_id','$datetim', '$pay_id', '$deliver_id','$total_price')";
mysqli_query($db,$insert_order);
if(isset($_SESSION["shoplist"])){
    foreach($_SESSION["shoplist"] as $g){
        $query2 = "SELECT * FROM order_info WHERE mem_id = '$member_id' AND order_time = '$datetim'";
        $result3 = mysqli_query($db, $query2);
        $get_order_id = mysqli_fetch_assoc($result3);
        $order_idd = $get_order_id['order_id'];
        $query3 = "INSERT INTO order_product (order_id, pro_id, order_num, order_price) VALUES ('$order_idd', '{$g['pro_id']}', '{$g['num']}', '{$g['price']}')";
        mysqli_query($db, $query3);
    }       
}

unset($_SESSION['shoplist']);
unset($_SESSION['fare']);
unset($_SESSION['payid']);
header('location: index.php');
?>
