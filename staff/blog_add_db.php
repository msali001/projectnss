<?
	include("./config.php");
	include("./function.php");
	$subject=$_POST['subject'];
	$text=$_POST['blog_text'];
	$login=$_POST['login'];
	$student=get_studname($con,$login);
	$dt=date("d/m/Y");
	mysqli_query($con,"insert into blog (blogsubject,blogdate,blogtext,loginid,blogvisit) values('$subject','$dt','$text','$login',0)");

	header("location: ./blog.php?msg=Blog Added");
?>