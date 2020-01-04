<?
	include("./config.php");
	$id=$_GET['id'];
	mysqli_query($con,"delete from assignment where assignid=$id");
	header("location: ./assignment.php?msg=Assignment Deleted");
?>