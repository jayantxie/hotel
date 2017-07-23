<head><meta http-equiv="refresh" content="3;">

<?php   header('Content-type: text/html; charset=utf-8');
include("connect.php");
session_start();
$phonenum=$_SESSION['phonenum'];
$roomnum=$_SESSION['roomnum'];
mysql_query("update customer set state = '未操作' where phonenum = $phonenum");
mysql_query("update room set state = '空房' where roomnum = $roomnum");
mysql_query("delete from `order` where phonenum = $phonenum");
if(mysql_affected_rows())
   echo "取消成功！";
else
   echo "取消失败！";
?>

<body>
</body>
