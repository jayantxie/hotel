
<head><meta http-equiv="refresh" content="3; url=http://localhost/hotel/admin/manager/check_out.html"></head>

<body><?php   header('Content-type: text/html; charset=utf-8');
include("connect.php");
$ID = $_POST['ID'];
$psw = $_POST['psw'];
$result= mysql_query("select * from customer where ID=$ID and psw=$psw");
$row = mysql_fetch_array($result);
   if($row != ""){
       mysql_query("UPDATE customer SET state = '未操作' WHERE  ID= $ID");
       $phonenum = $row['phonenum'];
       $result=mysql_query("select * from `order` where phonenum =$phonenum");
       $row=mysql_fetch_array($result);
       $roomnum=$row['roomnum'];
       mysql_query("update room set state = '空房' where roomnum=$roomnum");
       $cost=$row['cost'];
       $discount=$row['discount'];
       $amount=$cost*$discount;
       mysql_query("DELETE FROM `order` WHERE phonenum= $phonenum");
       echo "<script> alert('费用为：$amount');</script>";
   }
    else
	{
    echo "<script> alert('未找到记录！'); window.location.href='check_out.html'</script>";
    }
?>
</body>

