<?
	include("./config.php");
	$id=$_GET['id'];
	mysqli_query($con,"delete from questionbank where queid=$id");
	header("location: ./exam.php?msg=Question Deleted");
?>