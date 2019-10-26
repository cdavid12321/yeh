<?php

session_start();

$check = $_GET['check'];

if($check == "home"){
    $_SESSION['deli_id'] = 1;
    $_SESSION['fare'] = 60;
}
if($check == "family"){
    $_SESSION['deli_id'] = 2;
    $_SESSION['fare'] = 100;
}
if($check == "711"){
    $_SESSION['deli_id'] = 3;
    $_SESSION['fare'] = 120;
}
if($check == "ok"){
    $_SESSION['deli_id'] = 4;
    $_SESSION['fare'] = 60;
}
if($check == "postman"){
    $_SESSION['deli_id'] = 5;
    $_SESSION['fare'] = 120;
}
header("Location:shopbox.php");

?>