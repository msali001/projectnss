<?
	include("./config.php");
	include("./function.php");
	$title=$_POST['title'];
	$text=$_POST['assign_text'];
	$login=$_POST['login'];
	$login=get_staffname($con,$login);
	$sem=$_POST['sem'];
	$dt=$_POST['txtDate'];
	mysqli_query($con,"insert into assignment (assigntitle,assigndate,assigntext,staffloginid,studsemester) values('$title','$dt','$text','$login','$sem')");

	header("location: ./assignment.php?msg=Assignment Added");
?>
