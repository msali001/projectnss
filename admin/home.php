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
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="main">
  <tr>
    <td id="top"><table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="98%"><div align="right">Welcome <strong><? echo $_SESSION['cuser']; ?> - <a onclick="return confirm('Are you sure?')" href="./logout.php">Logout</a></strong></div></td>
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
    <td id="mid" valign="top"><div align="center">
      <table width="98%" border="0" cellspacing="0" cellpadding="10">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="25%"><div align="center">
            <table width="25%" border="0" cellspacing="0" cellpadding="0" >
              <tr>
                <td width="100%" id="box_mid"><table width="98%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                       <td width="38%"><div align="center">New Notifications</div></td>
                    </tr>
                </table></td>
                </tr>
              <tr>
                <td id="box_border" width="283px" valign="top" align="center"><div align="center">
                    <table border="0" width="283px" align="center" style="margin:5px;">
                      <?
			include("./config.php");
			$result=mysqli_query($con,"select * from query order by querydate");
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_array($result))
				{
						echo"<tr><td align=left width=25%>&nbsp;&nbsp;&bull;&nbsp;<a href=./queries_detail.php?id=".$row['queryid'].">".substr($row['querysubject'],0,22)."...</a></td></tr>";
				}
			}
<<<<<<< HEAD
			
=======
>>>>>>> 4004148899381ce22e9cf4857169e155a8c976d3
			else
			{
						echo"<tr><td align=center width=25%>No  Notifications</td></tr>";
			}	
		?>
<<<<<<< HEAD
        	<tr><td align="center"><strong><a href="./queries.php">More..</a></strong></td></tr>
=======
>>>>>>> 4004148899381ce22e9cf4857169e155a8c976d3
                </table>
                </div></td>
              </tr>
            </table>
          </div></td>
          <td width="25%"><div align="center">
            <table width="25%" border="0" cellspacing="0" cellpadding="0" >
              <tr>
                <td width="100%" id="box_mid"><table width="98%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="38%"><div align="center">Latest Blog</div></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td id="box_border" width="283px" valign="top" align="center"><div align="center">
                    <table border="0" width="283px" align="center" style="margin:5px;">
                      <?
			include("./config.php");
			$result=mysqli_query($con,"select * from blog order by blogid desc limit 0,5");
<<<<<<< HEAD
			if(mysqli_num_rows($result)>0)
			 {
			   while($row=mysqli_fetch_array($result))
			      {
				echo"<tr><td align=left width=25%>&nbsp;&nbsp;&bull;&nbsp;<a href=./blog_detail.php?id=".$row['blogid'].">".substr($row['blogtext'],0,22)."...</a></td></tr>";
			       }
		         }	
		        else
			{
						echo"<tr><td align=center width=25%>No  blogs</td></tr>";
			}		
=======
			while($row=mysqli_fetch_array($result))
			{
				echo"<tr><td align=left width=25%>&nbsp;&nbsp;&bull;&nbsp;<a href=./blog_detail.php?id=".$row['blogid'].">".substr($row['blogtext'],0,22)."...</a></td></tr>";
			}
			
>>>>>>> 4004148899381ce22e9cf4857169e155a8c976d3
		?>
        	<tr><td align="center"><strong><a href="./blog.php">More..</a></strong></td></tr>
                    </table>
                </div></td>
              </tr>
            </table>
          </div></td>
          <td width="25%"><div align="center">
            <table width="25%" border="0" cellspacing="0" cellpadding="0" >
              <tr>
                <td width="100%" id="box_mid"><table width="98%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="38%"><div align="center">Latest Assignments</div></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td id="box_border" width="283px" valign="top" align="center"><div align="center">
                    <table border="0" width="283px" align="center" style="margin:5px;">
                      <?
			include("./config.php");
			$result=mysqli_query($con,"select * from assignment order by assigndate desc  limit 0,5");
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_array($result))
				{
					echo"<tr><td align=left width=25%>&nbsp;&nbsp;&bull;&nbsp;<a href=./assignment_detail.php?id=".$row['assignid'].">".substr($row['assigntitle'],0,22)."...</a></td></tr>";
				}
			}
			else
			{
					echo"<tr><td align=center width=25%>No Any Assignments</td></tr>";
			}
			
		?>
                  	<tr><td align="center"><strong><a href="./assignment.php">More..</a></strong></td></tr>
                    </table>
                </div></td>
              </tr>
            </table>
          </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"><div align="center">
            <table width="60%" border="0" cellspacing="0" cellpadding="0">
              <tr>
               
                <td><div align="center"><a href="./staff.php"><img src="images/person2_f2.png" alt="Student" width="32" height="32" border="0" /></a></div></td>
                <td><div align="center"><a href="./queries.php"><img src="images/query.png" alt="Queries" width="32" height="33" border="0" /></a></div></td>
                <td><div align="center"><a href="./log.php"><img src="images/history_f2.png" alt="Log" width="32" height="32" border="0" /></a></div></td>
              
                <td><div align="center"><a href="./blog.php"><img src="images/css_f2.png" alt="Blog" width="32" height="32" border="0" /></a></div></td>
              </tr>
            </table>
          </div></td>
          </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><hr color="#FFDCB9" size="1px" width="98%"></td>
  </tr>
    <tr>
    <td id="footer"><? include("./footer.php"); ?></td>
  </tr>
</table>
<script>
  document.getElementById('hom').style.color = "#FFCC00";
</script>
</body>
</html>
