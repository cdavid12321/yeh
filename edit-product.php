<!DOCTYPE html>
<html>
    <head>
        <title>葉氏婚紗飾品</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once 'process.php'; ?>
        <div class="row justify-content-center">
        <form action="process.php" method='POST'>
            <div class='form-group'>
            <label>產品名稱</label>
            <input type="text" name="pro_name" class="form-control" >
            </div>
            <div class='form-group'>
            <label>照片檔名</label>
            <input type="text" name="pro_url" class="form-control" >
            </div>
            <div class='form-group'>
            <label>產品描述</label>
            <input type="text" name="pro_text" class="form-control" >
            </div>
            <div class='form-group'>
            <label>產品價錢</label>
            <input type="number" name="price" class="form-control" >
            </div>
            <div class='form-group'>
            <button type="submit" class="btn btn-primary" name="save">送出</button>
			<input type="button" class="btn btn-primary" value="回到首頁" onclick="location.href='index.php'">
            </div>
        </form>
        
        
        </div>