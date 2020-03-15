<?
	session_start();

	include("./config.php");
	include("./function.php");
	$subject=$_POST['subject'];
	$text=$_POST['query_text'];
	$faculty=$_SESSION['staffid'];
	$login=$_POST['login'];
	//$student=get_studname($con,$login);
	$dt=$_POST['txtDate'];
	echo "insert into query (querysubject,querydate,querytext,staffid, querystatus) values('$subject','$dt','$text','$faculty','Unanswered')";
	mysqli_query($con,"insert into query (querysubject,querydate,querytext,staffid, querystatus) values('$subject','$dt','$text','$faculty','Unanswered')");

	header("location: ./queries.php?msg=Query Added");
?>
