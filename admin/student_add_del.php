<?
	include("./config.php");
	$id=$_GET['id'];
	mysqli_query($con,"delete from student where studid=$id");
	header("location: ./student.php?msg=Student Deleted");
?>