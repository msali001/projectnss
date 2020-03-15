<?
	include("./config.php");
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$designation=$_POST['designation'];
	$login=$_POST['loginid'];
	$pass=md5($_POST['password']);
	$role=$_POST['role'];
	//echo "insert into staff(staffsurname,stafffirstname,stafflastname,staffdesignation,staffloginid, staffpassword,staffrole) values ('$sname','$fname','$lname','$designation','$login','$pass','$role')";
	mysqli_query($con,"insert into staff(staffsurname,stafffirstname,stafflastname,staffdesignation,staffloginid, staffpassword,staffrole) values ('$sname','$fname','$lname','$designation','$login','$pass','$role')");
	header("location: ./staff.php?msg=staff Added");
?>
