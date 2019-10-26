<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>註冊會員</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=big5">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="./css/floating-labels.css" rel="stylesheet">
    </head>
    <body>
    <form class="form-signin" action="registration.php" method="POST">
        <?php include('errors.php')?>
      <div class="text-center mb-4">
        <a href="index.php">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        </a>
        <h1 class="h3 mb-3 font-weight-normal">註冊系統</h1>
      </div>

      <div class="form-label-group-lg ">
        <label for="inputEmail">電子信箱</label>
        <input type="email" name="inputEmail" class="form-control" placeholder="Email" required autofocus>
      </div>
      <div class="form-label-group-lg ">
        <label for="inputName">姓名</label>
        <input type="text" name="inputName" class="form-control" placeholder="姓名" required autofocus>

      </div>
      <div class="form-label-group-lg">
        <label for="inputPhone">電話</label>
        <input type="text" name="inputPhone" class="form-control"  maxlength="10"placeholder="手機" required>
        
      </div>
      <div class="form-label-group-lg">
        <label for="inputPassword_1">密碼</label>
        <input type="password" name="inputPassword_1" class="form-control" placeholder="密碼" required>
        
      </div>
      <div class="form-label-group-lg">
      <label for="inputPassword_2">確認密碼</label>
        <input type="password" name="inputPassword_2" class="form-control" placeholder="再輸入一次密碼" required>
        
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> 我同意以上條款
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="reg_user">註冊</button>
      <br>
      <p>已經註冊了?<a href="login.php"><b>來去登入</b></a></p>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2019</p>
    </form>













































</body>