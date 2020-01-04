<?
	include("./config.php");
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$designation=$_POST['designation'];
	$login=$_POST['loginid'];
	$pass=md5($_POST['password']);
	$role=$_POST['role'];
	mysqli_query($con,"INSERT INTO `staff`(`staffsurname`, `stafffirstname`, `stafflastname`, `staffdesignation`, `staffloginid`, `staffpassword`, `staffrole`, `staffimg`, `staffqualification`, `staffcertification`, `staffexperience`, `staffemail`, `staffhobby`) VALUES ('$sname','$fname','$lname','$designation','$login','$pass','$role','default.gif','','','','','')");
	header("location: ./staff.php?msg=staff Added");
?>
