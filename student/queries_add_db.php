<?
	include("./config.php");
	include("./function.php");
	$subject=$_POST['subject'];
	$text=$_POST['query_text'];
	$faculty=$_POST['faculty'];
	$login=$_POST['login'];
	$student=get_studname($con,$login);
	$dt=$_POST['txtDate'];
	mysqli_query($con,"insert into query (querysubject,querydate,querytext,staffid,studid, querystatus) values('$subject','$dt','$text','$faculty','$student','Unanswered')");

	header("location: ./queries.php?msg=Query Added");
?>