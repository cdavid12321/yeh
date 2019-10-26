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
        
        <nav class="navbar fixed-top navbar-expand-xl" style="background-color: #e3f2fd;">
            <div class="container ">
                    <a class="h3 mx-1" href="#">葉氏婚紗飾品</a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                          <a class="nav-item nav-link active" href="#">首頁 <span class="sr-only">(current)</span></a>
                          <a class="nav-item nav-link" href="#aboutme">關於我</a>
                          <a class="nav-item nav-link" href="#product">飾品</a>
                          <a class="nav-item nav-link" href="././login.php">登入</a>
                        </div>
                    </div>
                </div>
        </nav>
        <div style="height: 500px; position-relative">
            
            <img class="position-relative w-100 h-100 d-inline-block" src="./images/IMG_6164.JPG"  alt="Cinque Terre"/>
             
              <div style="position:absolute; z-index:2; left:250px; top:250px">
                <h1 class="display-5 font-weight-normal">歡迎蒞臨 葉氏婚紗飾品</h1>
              <p class="lead font-weight-normal">堅持手工製造 給予美好感受</p>
              <a class="btn btn-outline-secondary" href="#">Coming soon</a>
                </div>   
           
        </div>
    <?php require_once 'process.php'; ?>

        
        
        
        
    
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
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src=./images/<?php echo $row['pro_url']; ?>.jpg preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
                        <div class="card-body">
                            <h2 class="card-text"><strong><?php echo $row['pro_name'];?></strong></h2>  
                            <p class="card-text" style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;"><?php echo $row['pro_text']; ?></p>
                            <h2 class="text-right" style="color:red;">$ <?php echo $row['price']; ?></h2>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-md btn btn-info">查看更多</button>
                                <button type="button" class=" btn btn-md btn btn-info" style="float:right;">加入購物車</button>                          
                            </div>
                        </div>
                      </div>
                  </div>
             <?php endwhile; ?> 
            </div>
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>