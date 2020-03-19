<?
	include("./config.php");
	$id=$_POST['id'];
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$designation=$_POST['desig'];
	$login=$_POST['loginid'];
	$pass=$_POST['password'];
	$pass=md5($pass);
	$role=$_POST['role'];
	$phoneno=$_POST['phoneno'];
	mysqli_query($con,"update staff set staffsurname='$sname', stafffirstname='$fname', stafflastname='$lname', staffdesignation='$designation', staffloginid='$login', staffpassword='$pass', staffphoneno='$phoneno', staffrole='$role' where staffid=$id"); 
	
	header("location: ./staff.php?msg=staff Successfully Edited");
?>
