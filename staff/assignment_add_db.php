<?
	session_start();
	include("./config.php");
	include("./function.php");
	$title=$_POST['title'];
	$text=$_POST['assign_text'];
	$login=$_POST['login'];
	$login=get_staffname($con,$login);
	$fac_id = $_SESSION['staffid'];
	$sem=$_POST['sem'];
	$dt=$_POST['txtDate'];
	echo "Staff id ".$_SESSION['staffid'];
	mysqli_query($con,"insert into assignment (assigntitle,assigndate,assigntext,staffloginid,studsemester,fac_id) values('$title','$dt','$text','$login','$sem','$fac_id')");

	header("location: ./assignment.php?msg=Assignment Added");
?>
