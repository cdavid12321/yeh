<?php

session_start();

$username = '';
$userEmail = '';
$userPhone = '';
$errors = array();

$db = mysqli_connect('localhost','root','','yah') or die("無法連線資料庫");

//註冊
if(isset($_POST['reg_user'])){
    $username = mysqli_real_escape_string($db, $_POST['inputName']);
    $userEmail = mysqli_real_escape_string($db, $_POST['inputEmail']);
    $userPhone = mysqli_real_escape_string($db, $_POST['inputPhone']);
    $userPassword_1 = mysqli_real_escape_string($db, $_POST['inputPassword_1']);
    $userPassword_2 = mysqli_real_escape_string($db, $_POST['inputPassword_2']);

    if(empty($username)) {array_push($errors, "尚未輸入姓名");}
    if(empty($userEmail)) {array_push($errors, "尚未輸入Email");}
    if(empty($userPhone)) {array_push($errors, "尚未輸入手機");}
    if(empty($userPassword_1)) {array_push($errors, "尚未輸入密碼");}
    if($userPassword_1 != $userPassword_2){array_push($errors, "密碼不一致");}

    $user_check_query = "SELECT * FROM member WHERE mem_email = '$userEmail' LIMIT 1";

    $results = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($results);


    if($user){
        if($user['mem_email'] === $userEmail){array_push($errors, "此Email已經註冊過了!");}

    }

    if(count($errors) == 0){
        $password = md5($userPassword_1);
        $query = "INSERT INTO member (mem_name, mem_email, mem_phone, mem_password) VALUES ('$username', '$userEmail', '$userPhone', '$password')";

        mysqli_query($db,$query);
		$_SESSION['get_name'] = $username;
        $_SESSION['useremail'] = $userEmail;
        $_SESSION['success'] = "已經成功登入";
        $query1 = "SELECT * FROM member WHERE mem_email ='$userEmail'";
        $results1 = mysqli_query($db,$query1);
        $user_id = mysqli_fetch_assoc($results1);
        $_SESSION['get_id'] = $user_id['mem_id'];
        header ('location: index.php');

    }
}
//登入的人
if(isset($_POST['login_user'])){
    $userEmail = mysqli_real_escape_string($db, $_POST['useremail']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if(empty($userEmail)){

        array_push($errors, "email錯誤");
    }
    if(empty($password)){
        array_push($errors, "密碼錯誤");
    }
    if(count($errors)==0){

        $password = md5($password);

        $query = "SELECT * FROM member WHERE mem_email='$userEmail' AND mem_password='$password'";
        $results = mysqli_query($db, $query);
        $get_name = mysqli_fetch_assoc($results);
        if(mysqli_num_rows($results)){
            $_SESSION['useremail'] = $userEmail;
            $_SESSION['get_name'] = $get_name['mem_name'];
            $_SESSION['get_id'] = $get_name['mem_id'];
            $_SESSION['success'] = "登入成功";
            header('location: index.php');
        }else{
            $message = "Email或密碼錯誤 請重試";
            echo "<script type='text/javascript'>alert('$message');</script>";
            array_push($errors, "email或密碼錯誤 請重試");
        }
    }
}








?>