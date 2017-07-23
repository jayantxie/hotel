<head><meta http-equiv="refresh" content="3; url=http://localhost/hotel/admin/manager/discount.html"></head>

<body><?php 
header('Content-type: text/html; charset=utf-8');
include("connect.php");
$roomnum = $_POST['roomnum'];
$discount = $_POST['discount'];
$sql = "update `order` set discount = $discount where roomnum = $roomnum";
$result=mysql_query($sql);
if(mysql_affected_rows() != ""){
echo "<script> alert('修改成功！'); window.location.href='discount.html'</script> ";
}
else{ 
echo "<script> alert('修改失败！'); window.location.href='discount.html'</script> ";
}
?>
</body>

