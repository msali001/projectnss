<?
	include("./config.php");
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$sem=$_POST['semester'];
	$login=$_POST['loginid'];
	$phoneno = $_POST['phoneno'];
	$pass=md5($_POST['password']);
	mysqli_query($con,"insert into student (studsurname,studfirstname,studlastname,studsemester,studloginid,studpassword,studphoneno) values('$sname','$fname','$lname','$sem','$login','$pass','$phoneno')");
	header("location: ./student.php?msg=Student Added");
?>
