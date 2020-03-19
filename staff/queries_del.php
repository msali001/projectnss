<?
	include("./config.php");
	$id=$_GET['id'];
	mysqli_query($con,"delete from query where queryid=$id");
	header("location: ./queries.php?msg=Notification Deleted");
?>
