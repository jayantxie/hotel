<head><meta http-equiv="refresh" content="3; url=http://localhost/hotel/admin/customer/login.html"></head>

<body><?php 
header('Content-type: text/html; charset=utf-8');
include("connect.php");
session_start();
$phonenum = $_POST['phonenum'];
$psw = $_POST['psw'];
$_SESSION['phonenum']=$phonenum;
$sql = "select * from customer where  phonenum = '$phonenum' and psw = '$psw'";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);

if($row != ""){
echo "<script> alert('登录成功,正在进入客户界面'); window.location.href='index.html'</script> ";
}
else{ 
echo "<script> alert('登录失败,用户名或者密码错误'); window.location.href='login.html'</script> ";
}
?>
</body>

