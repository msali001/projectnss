<?
	include("./function.php");
	chk_user();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>College Portal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #990000}
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="main">
  <tr>
    <td id="top"><table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="98%"><div align="right">Welcome <strong><? echo $_SESSION['cuser']; ?> - <a href="./logout.php">Logout</a></strong></div></td>
        <td width="2%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td id="head">&nbsp;</td>
  </tr>
  <tr>
    <td id="menu"><? include("menu.php"); ?></td>
  </tr>
  <tr>
    <td id="mid" valign="top"><table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="74" id="head_txt"><div align="right"><img src="images/address_f2.png" alt="Assignment" width="32" height="31" /></div></td>
        <td colspan="2" id="head_txt"><div align="left">
          <div align="left" class="style2">&nbsp;Assignment Management</div>
        </div></td>
        </tr>
       <tr>
        <td colspan="3"><hr color="#CCCCCC" size="1px"></td>
      </tr>
    
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong><?=$_GET['msg']; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
        <?
			include("./config.php");
			echo"<table border=0 id=border width=90%><tr><td id=border align=center>Assignment Title</td><td id=border align=center>Date</td><td id=border align=center>Faculty</td><td id=border align=center>Detail</td></tr>";
			$result=mysqli_query($con,"select * from assignment order by assigndate desc");
			while($row=mysqli_fetch_array($result))
			{
				echo"<tr><td align=center>".$row['assigntitle']."</td><td align=center>".$row['assigndate']."</td><td align=center>".$row['staffloginid']."</td><td align=center><a href=./assignment_detail.php?id=".$row['assignid']."><img src=./images/detail_item.png alt=Detail border=0></a></td></tr>";
			}
			echo"</table>"
		?>
        </div></td>
      </tr>
      <tr>
                <td height="37" colspan="3"><div align="center">
                    <label></label>
                    <label>
                    <input type="button" name="button2" id="but_sub" value="Cancel" onclick="location.href='./home.php'" />
                    </label>
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
     
</script>
<script>
  document.getElementById('hom').style.color = "#FFCC00";
</script>
</html>
