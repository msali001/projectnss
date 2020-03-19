<?
	include("./config.php");
	$id=$_POST['id'];
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$sem=$_POST['semester'];
	$login=$_POST['loginid'];
	$pass=$_POST['password'];
<<<<<<< HEAD
	$phoneno=$_POST['phoneno'];
	$pass=md5($pass);
	mysqli_query($con,"update student set studsurname='$sname', studfirstname='$fname', studlastname='$lname', studsemester='$sem', studloginid='$login', studpassword='$pass', studphoneno='$phoneno' where studid=$id");
=======
	$pass=md5($pass);
	mysqli_query($con,"update student set studsurname='$sname', studfirstname='$fname', studlastname='$lname', studsemester='$sem', studloginid='$login', studpassword='$pass' where studid=$id");
>>>>>>> 4004148899381ce22e9cf4857169e155a8c976d3
	
	header("location: ./student.php?msg=Student Successfully Edited");
?>
