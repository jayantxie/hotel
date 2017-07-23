<head><meta http-equiv="refresh" content="3; url=http://localhost/hotel/admin/customer/order.html">

<?php   header('Content-type: text/html; charset=utf-8');
include("connect.php");
session_start();

$phonenum=$_SESSION['phonenum'];$checkdate=$_POST['checkdate'];$roomnum=$_POST['roomnum'];
$_SESSION['roomnum'] = $roomnum;
mysql_query("update customer set state = '预订' where phonenum = $phonenum");
mysql_query("update room set state = '预订' where roomnum = $roomnum");

$result = mysql_query("SELECT * FROM room WHERE roomnum='$roomnum'");
$row = mysql_fetch_array($result);
$cost=$row['price'];
$discount=1.0;
$sql = "insert into test.order (phonenum,checkdate, roomnum, state, cost, discount) values
 ('$phonenum','$checkdate','$roomnum', '预订', $cost, $discount)";

$result=mysql_query($sql);
if($result == "")
   echo "<script> alert('出现错误,预订失败'); window.location.href='index.html'";
else
   echo "预订成功！";
?>

<body>
</body>
