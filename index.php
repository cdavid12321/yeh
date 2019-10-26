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
    <?php require_once 'process.php'; ?>
      <div class="row">
        <?php
          $mysqli = new mysqli('localhost', 'root', '', 'yah') or die(mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM product") or die($mysqli->error);
        ?>
              
      <div id="myCarousel" class="carousel slide container" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-interval="4" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-interval="2" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-interval="2" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-interval="2" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img style="max-height: 600px;" class="bd-placeholder-img " width="100%" height="100%" src="./images/IMG_6164.JPG">
          <div class="container">
            <div class="carousel-caption text-dark text-left font-weight-bold">
              <h1>歡迎蒞臨 葉氏婚紗飾品</h1>
              <p>堅持手工製造 給予美好感受</p>
            </div>
          </div>
        </div>
        <?php
          while ($row = $result->fetch_assoc()):?>
            <div class="carousel-item">
              <img style="max-height: 600px;" class="bd-placeholder-img img-fluid" width="100%" height="100%" src=./images/<?php echo $row['pro_url']; ?>.jpg>
              <div class="container">
                <div class="carousel-caption font-weight-bold text-dark text-right">
                  <h1><strong><?php echo $row['pro_name'];?></strong></h1>
                  <p><?php echo $row['pro_text']; ?></p>
                  <p><a class="btn btn-lg btn-primary" href="#product" role="button">想看更多</a></p>
                </div>
              </div>
            </div>
        <?php endwhile; ?> 
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

        
    <div id="product" class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <?php
              $mysqli = new mysqli('localhost', 'root', '', 'yah') or die(mysqli_error($mysqli));
              $result = $mysqli->query("SELECT * FROM product") or die($mysqli->error);
            ?>
            <?php
            while ($row = $result->fetch_assoc()):?>
                  <div class="col-md-4">
                      <div class="card mb-4 shadow-sm">
                        <a href="item.php?pro_seemore=<?php echo $row['pro_name'];?>"><img class="bd-placeholder-img card-img-top" width="100%" height="225" src=./images/<?php echo $row['pro_url']; ?>.jpg preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></a>
                        <div class="card-body">
                            <h2 class="card-text"><strong><a href="item.php?pro_seemore=<?php echo $row['pro_name'];?>"><?php echo $row['pro_name'];?></a></strong></h2>  
                            <p class="card-text" style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;"><?php echo $row['pro_text']; ?></p>
                            <h2 class="text-right" style="color:red; font-family:Microsoft JhengHei;">網路價 $ <?php echo $row['price']; ?></h2>
                            <div class="d-flex justify-content-between align-items-center">
                              <?php
                              if(isset($_SESSION['useremail'])) {
                                echo '<button type="button" onclick= "myFunction2();';
                                echo '';
                                echo 'location.href=';
                                echo "'";
                                echo 'shopbox_server.php?id=';
                                echo $row['pro_id'];
                                echo "'";
                                echo '"';
                                echo 'class="btn btn-danger btn-lg btn-block">加入購物車</button>';
                              }else{
                                echo '<button type="button" onclick= "myFunction();';
                                echo 'location.href=';
                                echo "'";
                                echo 'login.php';
                                echo "'";
                                echo '"';
                                echo 'class="btn btn-danger btn-lg btn-block">加入購物車</button>';
                              }
                              ?>         
                            </div>
                        </div>
                      </div>
                  </div>
             <?php endwhile; ?> 
            </div>
            <script type="text/javascript">
                function myFunction2() {
                  alert("已加入購物車!");
                }
                function myFunction() {
                  
                  alert("請先登入會員!");
                }
            </script>   
          </div>
          </div>  
          <?php   
            function pre_r( $array ){
              echo '<pre>';
              print_r($array);
              echo '</pre>';
            }
          ?>
    </body>
    <?php require "index_product.php"; ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>