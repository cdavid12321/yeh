<?php
session_start();
unset($_SESSION['useremail']);
unset($_SESSION['get_id']);
//session_destroy();
header('Location: index.php');
exit;

?>