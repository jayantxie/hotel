
<head><meta http-equiv="refresh" content="3; url=http://localhost/hotel/admin/customer/register.html"></head>

<body><?php   header('Content-type: text/html; charset=utf-8');
include("connect.php");

$sql = "INSERT INTO test.customer (ID,name, psw,sex, age,phonenum,state)
VALUES ('$_POST[ID]','$_POST[name]', '$_POST[psw]', '$_POST[sex]', '$_POST[age]', '$_POST[phonenum]','未选择')";
$result=mysql_query($sql);
   if($result != "")
   echo "<script> alert('恭喜！注册成功！'); window.location.href='login.html'</script>";
    else
	{
    echo "<script> alert('出现错误，注册失败'); window.location.href='register.html'</script>";
    }
?>
</body>

