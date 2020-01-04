<?
	include("./config.php");
	$id=$_GET['id'];
	mysqli_query($con,"delete from staff where staffid=$id");
	header("location: ./staff.php?msg=Staff Deleted");
?>