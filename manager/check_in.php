
<head><meta http-equiv="refresh" content="3; url=http://localhost/hotel/admin/manager/check_in.html"></head>

<body><?php   header('Content-type: text/html; charset=utf-8');
include("connect.php");
$ID = $_POST['ID'];
$psw = $_POST['psw'];
$result= mysql_query("select * from customer where ID=$ID and psw like $psw");
$row = mysql_fetch_array($result);
if($row != ""){
    $result =mysql_query("UPDATE customer SET state = '入住' WHERE  ID= $ID");
    $phonenum = $row['phonenum'];
    $result = mysql_query("UPDATE `order` SET state = '入住' WHERE  phonenum= $phonenum");
    $result=mysql_query("select * from `order` where phonenum =$phonenum");
    $row=mysql_fetch_array($result);
    $roomnum=$row['roomnum'];
    $result = mysql_query("update room set state = '入住' where roomnum=$roomnum");
    echo "<script> alert('登记成功！'); window.location.href='check_in.html'</script>";
   }
    else
	{
    echo "<script> alert('该用户尚未注册'); window.location.href='check_in.html'</script>";
    }
?>
</body>

