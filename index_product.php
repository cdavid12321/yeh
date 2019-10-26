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
        
        <nav class="navbar fixed-top navbar-expand-xl " style="background-color: #e3f2fd;">
            <div class="container ">
                    <a class="h3 mx-1"  style="font-family:Microsoft JhengHei;" href="index.php">葉氏婚紗飾品</a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                          <a class="nav-item nav-link active"  style="font-family:Microsoft JhengHei;" href="index.php">首頁 <span class="sr-only">(current)</span></a>
                          <a class="nav-item nav-link" style="font-family:Microsoft JhengHei;" href="edit-product.php">(暫)新增商品</a>
                          <a class="nav-item nav-link" style="font-family:Microsoft JhengHei;" href="index.php#product">飾品</a>
                          <a class="nav-item nav-link" style="font-family:Microsoft JhengHei;" href="destory.php">全毀</a>
                          <a class="nav-item nav-link" style="font-family:Microsoft JhengHei;" href="clean_cart.php">清空購物車</a>
                          <a class="nav-item nav-link" style="font-family:Microsoft JhengHei;" href="shopbox.php">購物車</a>
                          <?php
                          if(isset($_SESSION['useremail'])) : 
                            $email_of_user = $_SESSION['useremail'];
                            $name_of_user = $_SESSION['get_name'];
                          ?>
                             <a class="nav-item nav-link" style="font-family:Microsoft JhengHei;"><?php echo $name_of_user;?> 您好 	!</a>
                             <a class="btn btn-outline-primary" href="logout.php">登出</a>
                          <?php else : ?>
                          <a class="nav-item nav-link" style="font-family:Microsoft JhengHei;" href="././login.php">登入</a> 

                          <?php endif ?>
                         
                        </div>
                    </div>
                </div>
        </nav>
    </body>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
          <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
        </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
  </html>