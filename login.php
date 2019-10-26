<?php include('server.php') ?>
<!doctype html>
<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=big5">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>登入系統</title>
    <!-- Custom styles for this template -->
    <link href="./css/floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" action="login.php" method="POST">
      <div class="text-center mb-4">
        <a href="index.php">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        </a>
        <h1 class="h3 mb-3 font-weight-normal">登入系統</h1>
      </div>

      <div class="form-label-group-lg ">
      <label for="useremail">電子信箱</label>
        <input type="email" name="useremail" class="form-control" placeholder="Email address" required autofocus>

      </div>

      <div class="form-label-group-lg">
        <label for="password">密碼</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> 記住我
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_user">登入</button>
      <br>
      <p>還沒註冊?<a href="registration.php"><b>來去註冊</b></a></p>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2019</p>
    </form>
  </body>
</html>
