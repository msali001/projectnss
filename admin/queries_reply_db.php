<?
	include("./config.php");
	include("./function.php");
	$id=$_POST['id'];
	$reply=$_POST['reply'];
	mysqli_query($con,"update query set queryreply='$reply', querystatus='Answered' where queryid='$id'");

	header("location: ./queries.php?msg=Query Edited");
?>