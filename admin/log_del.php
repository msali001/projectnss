<?
	include("./config.php");
	$id=$_GET['id'];
	mysqli_query($con,"delete from logtable");
	header("location: ./log.php?msg=Log Cleared");
?>