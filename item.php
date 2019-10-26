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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <br><br><br>
        <div>
        <?php
        if( $_GET['pro_seemore']) : ?>
            <?php $name = $_GET['pro_seemore']; ?>
        <?php endif ?>
        <?php
          $mysqli = new mysqli('localhost', 'root', '', 'yah') or die(mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM product WHERE pro_name='$name'") or die($mysqli->error);
          $row = $result->fetch_assoc();
        ?> 
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-5 mb-md-0">
                    <img style="height="800" width="400" src="./images/<?php echo $row['pro_url']; ?>.jpg" alt="">
                </div>
                <div class="col-md-6 align-self-center text-center text-md-left">
                    <div class="block">
                        <h1 class="font-weight-bold mb-4 font-size-60"><?php echo $row['pro_name'] ?></h1>
                        <p class="mb-4"><?php echo $row['pro_text'] ?></p>
                        <h1 class="text-center" style="color:red;">$ <?php echo $row['price']; ?></h1>
                        <button type="button" onclick="location.href='shopbox_server.php?id=<?php echo $row['pro_id'] ?>'" class="btn btn-danger btn-lg btn-block">加入購物車</button>
                    </div>
                </div>
            </div><!-- .row close -->
        </div>
        </div>
    </body>
    <?php require "index_product.php"; ?>
    </html>