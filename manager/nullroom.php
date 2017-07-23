<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>紫金港大酒店管理界面</title>

<?php
header('Content-type: text/html; charset=utf-8');
include("connect.php");
$sql = "select * from room where state like '空房' order by roomnum asc";
$result=mysql_query( $sql);
?>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#6699ff"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bordercolor="#0072FF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1">空房信息</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">&nbsp;</span><span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><table width="47%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
	<tr>
        
        <td width="29%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">房间编号</span></div></td>
        <td width="37%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">房间价格</span></div></td>
      </tr>

        <?php
        while($row =mysql_fetch_array($result,MYSQL_ASSOC))
        {

          ?>

          <tr>

            <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $row['roomnum'];?></div></td>

            <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $row['price'];?></div></td>

          </tr>

          <?php
        }
        ?>

	  
    </table></td>
  </tr></body>
</html>
