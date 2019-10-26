<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>葉氏婚紗飾品</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=big5">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <br><br><br>
        <div>
        <?php
        $db = mysqli_connect('localhost','root','','yah') or die("無法連線資料庫");
        ?>
        <?php
        $id_product = ($_GET['id']);
        $query = "SELECT * FROM product WHERE pro_id='$id_product'";
        $result = mysqli_query($db, $query);
        if(empty($result) || mysqli_num_rows($result)==0){
            die("您要購買的商品已下架");    
        }else{
            $shop = mysqli_fetch_assoc($result);
        }
        ?>
        <?php
            $shop['num']=1;
            if(isset($_SESSION['shoplist'][$shop['pro_id']])){
                //若商品存在數量++
                $_SESSION['shoplist'][$shop['pro_id']]['num']++;
            }else{
                //若不存在 添加新商品
                $_SESSION['shoplist'][$shop['pro_id']]= $shop;
            }
            header('location: index.php#product');
        ?>
        </div>
    </body>

    <?php require "index_product.php";?>
    </html>
