<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>紫金港大酒店用户界面</title>

<?php
session_start();
header('Content-type: text/html; charset=utf-8');
include("connect.php");
$phonenum = $_SESSION['phonenum'];
$sql = "select * from `order` where phonenum like '$phonenum'";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
?>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="25%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#6699ff"><table width="62%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="30%" bordercolor="#0072FF">&nbsp;</td>
            <td width="70%"><div align="right"><span class="STYLE1">订单信息&nbsp;</span><span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><table width="25%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
	<tr>
        
        <td width="29%" height="35" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">房间编号</span></div></td>
      </tr>
	<tr>

        <td height="34" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $row['roomnum'];?></div></td>
	  </tr>

	  
    </table>
      <table width="25%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
        <tr>
          <td width="37%" height="35" bgcolor="d3eaef" class="STYLE6"><div align="center">订单金额</div></td>
        </tr>
        <tr>
          <td height="33" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $row['cost'];?></div></td>
        </tr>
      </table>
      <table width="25%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
        <tr>
          <td width="37%" height="34" bgcolor="d3eaef" class="STYLE6"><div align="center">入住日期</div></td>
        </tr>
        <tr>
          <td height="38" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $row['checkdate'];?></div></td>
        </tr>
      </table>
      <table width="25%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
        <tr>
          <td width="37%" height="39" bgcolor="d3eaef" class="STYLE6"><div align="center">折扣优惠</div></td>
        </tr>
        <tr>
          <td height="34" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $row['discount'];?></div></td>
        </tr>
      </table>
      <table width="25%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
        <tr>
          <td width="37%" height="34" bgcolor="d3eaef" class="STYLE6"><div align="center">入住状态</div></td>
        </tr>
        <tr>
          <td height="38" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $row['state'];?></div></td>
        </tr>
      </table></td>
  </tr></body>
</html>
