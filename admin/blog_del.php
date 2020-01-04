<?
	include("./config.php");
	$id=$_GET['id'];
	mysqli_query($con,"delete from blog where blogid=$id");
	header("location: ./blog.php?msg=blog Deleted");
?>