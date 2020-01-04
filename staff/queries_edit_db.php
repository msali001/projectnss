<?
	include("./config.php");
	include("./function.php");
	$id=$_POST['id'];
	$subject=$_POST['subject'];
	$text=$_POST['query_text'];
	$faculty=$_POST['faculty'];
	$login=$_POST['login'];
	$student=get_studname($con,$login);
	$dt=$_POST['txtDate'];
	mysqli_query($con,"update query set querysubject='$subject', querydate='$dt', querytext='$text', staffid='$faculty', studid='$student' where queryid='$id'");

	header("location: ./queries.php?msg=Query Edited");
?>