<?
	include("./config.php");
	$id=$_POST['id'];
	$sname=$_POST['sname'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$img=$_POST['img'];
	$qualification=$_POST['qualification'];
	$Sphno=$_POST['SPhoneno'];
 	//Image Upload
	$uploaddir = '../img/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
	$fpath=$_FILES['userfile']['name'];
	if($fpath=="")
	{
		$fpath=$img;
	}
	if($img=="")
	{
		$img="default.gif";
	}
	mysqli_query($con,"update staff set staffsurname='$sname', stafffirstname='$fname', stafflastname='$lname', staffemail='$email', staffqualification='$qualification', staffphoneno='$Sphno', staffimg='$fpath' where staffid=$id"); 
	
	header("location: ./profile.php?msg=Profile Successfully Edited");
?>
