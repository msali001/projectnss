<?
	if($_SESSION['cuser']!="")
	{
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="30px">
      <tr>
        <td width="11%" style="border:solid 1px #CC0000"><div align="center"><a id="hom" href="./home.php">Home</a></div></td>
        <td width="11%" style="border:solid 1px #CC0000"><div align="center"><a id="std" href="./student.php">Student</a></div></td>
        <td width="11%" style="border:solid 1px #CC0000"><div align="center"><a id="quri" href="./queries.php">Notification</a></div></td>        
        <td width="11%" style="border:solid 1px #CC0000"><div align="center"><a id="lg" href="./log.php">Log</a></div></td>
        <td width="11%" style="border:solid 1px #CC0000"><div align="center"><a id="exa" href="./exam.php">Exams</a></div></td>
        <td width="11%" style="border:solid 1px #CC0000"><div align="center"><a id="ass" href="./assignment.php">Assignments</a></div></td>     
        <td width="11%" style="border:solid 1px #CC0000"><div align="center"><a id="blg" href="./blog.php">Blog</a></div></td>
        <td width="11%" style="border:solid 1px #CC0000"><div align="center"><a id="pro" href="./profile.php">Profile</a></div></td>        
      </tr>
</table>
<?
}
?>
