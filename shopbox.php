<?php
    session_start();
?>
<?php 
if(isset($_SESSION['username'])):
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>購物車</title>
</head> 
<body>
<br><br><br>
<center>
<h1>查看購物車</h1>
<table width="80%" border="1">
    <tr>
     <th>
     商品名稱
     </th>
     <th>
     數量
     </th>
    <th>
    單價
    </th>
    <th>
    小計
    </th>
    <th>
    </th>
    </tr>
<?php
$sum = 0;//總金額便亮
if(isset($_SESSION["shoplist"])){
    foreach($_SESSION["shoplist"] as $V){
        echo "<tr>";
        echo"<td>{$V['pro_name']}</td>";
        echo"<td align=center>
        <button onclick='window.location.href=\"update_cart.php?id={$V['pro_id']}&num=+1\"'>+</button>
        {$V['num']}
        <button onclick='window.location.href=\"update_cart.php?id={$V['pro_id']}&num=-1\"'>-</button>
        </td>";
        echo"<td>{$V['price']}</td>";
        echo"<td>".($V['price']*$V['num'])."</td>";
        echo"<td><a href='clean_cart.php?id={$V['pro_id']}'>刪除</a></td>";
        echo"</tr>";
        $sum+=$V['price']*$V['num'];
    }       
}
?>
<tr>
    <th class="text-right">
        總計金額: 
    </th>
    <th colspan="3" class="text-right">NT$ <a style="color:red;"><?php echo $sum;?></a></th>
    <td>&nbsp;</td>
</tr>
</table>
<div></div>
</div>
<hr>

<div class="container">
<h2>配送方式:</h2>
<?php
echo "<button class='btn btn-info' onclick='window.location.href=\"delivery.php?check=home\"'>宅配到府$60</button>";
echo '&nbsp;';
echo "<button class='btn btn-info' onclick='window.location.href=\"delivery.php?check=family\"'>全家超商取貨$100</button>";
echo '&nbsp;';
echo "<button class='btn btn-info' onclick='window.location.href=\"delivery.php?check=711\"'>7-11超商取貨$120</button>";
echo '&nbsp;';
echo "<button class='btn btn-info' onclick='window.location.href=\"delivery.php?check=ok\"'>萊爾富&OK超取$60</button>";
echo '&nbsp;';
echo "<button class='btn btn-info' onclick='window.location.href=\"delivery.php?check=postman\"'>i 郵箱$120</button>";
?>
</div>
<?php
  if(isset($_SESSION['fare'])){
    echo "<br>";
    echo "<a class='text-right'>NT$ ";
    $deli_fare = $_SESSION['fare'];
    echo $deli_fare;
    echo "</a>";
  }
?>
<hr>
<div class="container">
<h2>付款方式:</h2>
<?php
echo "<button class='btn btn-info' onclick='window.location.href=\"pay_id.php?pay=credit\"'>線上刷卡</button>";
echo '&nbsp;';
echo "<button class='btn btn-info' onclick='window.location.href=\"pay_id.php?pay=deli_pay\"'>貨到付款</button>";
echo '&nbsp;';
echo "<button class='btn btn-info' onclick='window.location.href=\"pay_id.php?pay=line_pay\"'>Line Pay</button>";
echo '&nbsp;';
echo "<button class='btn btn-info' onclick='window.location.href=\"pay_id.php?pay=google_pay\"'>Google Pay</button>";
echo '&nbsp;';
echo "<button class='btn btn-info' onclick='window.location.href=\"pay_id.php?pay=atm\"'>ATM 轉帳</button>";
?>
</div>
<?php
  if((isset($_SESSION['payid'])) and (isset($_SESSION['pay_name']))){
    echo "<br>";
    echo "<a class='text-right'>";
    $pay = $_SESSION['pay_name'];
    echo $pay;
    echo "</a>";
  }
?>
<hr>
<div>
<?php
if((isset($sum)) and (isset($_SESSION['fare']))){
    $total_price = ($sum+$deli_fare);
    echo '<a class="text-right">總金額:';
    echo $total_price;
    echo '</a>';
}
?>
</div>
<div>
<form action="shop_submit.php" method="post">
    <input type="hidden"  name="member_id" value="<?php echo $_SESSION['get_id'];?>"/>
    <input type="hidden"  name="total_price" value="<?php echo $total_price;?>"/>
    <input type="submit" class="btn btn-danger btn-lg btn-block" name="submitButton" value="訂單確認送出"" />
</form>
</div>
</center>
</body>
<?php require "index_product.php";?>
</html>
<?php else : ?>
<script type="text/javascript"> 
alert("請先加入會員!");
window.location.href = "login.php";
</script>
<?php endif ?>