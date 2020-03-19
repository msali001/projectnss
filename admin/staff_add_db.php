<?
	include("./config.php");
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$designation=$_POST['designation'];
	$login=$_POST['loginid'];
	$pass=md5($_POST['password']);
	$phoneno=$_POST['phoneno'];
	$role=$_POST['role'];
	//echo "insert into staff(staffsurname,stafffirstname,stafflastname,staffdesignation,staffloginid, staffpassword,staffrole) values ('$sname','$fname','$lname','$designation','$login','$pass','$role')";
<<<<<<< HEAD
	mysqli_query($con,"insert into staff(staffsurname,stafffirstname,stafflastname,staffdesignation,staffloginid, staffpassword,staffrole,staffphoneno) values ('$sname','$fname','$lname','$designation','$login','$pass','$role','$phoneno')");
=======
	mysqli_query($con,"insert into staff(staffsurname,stafffirstname,stafflastname,staffdesignation,staffloginid, staffpassword,staffrole) values ('$sname','$fname','$lname','$designation','$login','$pass','$role')");
>>>>>>> 4004148899381ce22e9cf4857169e155a8c976d3
	header("location: ./staff.php?msg=staff Added");
?>
