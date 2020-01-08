<?
	include("./config.php");
	$id=$_POST['id'];
	$opass=md5($_POST['opass']);
	$npass=$_POST['npass'];
	$result=mysqli_query($con,"select studpassword from student where studloginid='$id'");
	$row=mysqli_fetch_array($result);
	if($row['studpassword']==$opass and $id!=$npass)
	{
	        md5($npass);
		mysqli_query($con,"update student set studpassword='$npass' where studloginid='$id'");
		header("location: ./profile.php?msg=Password Successfully Changed");		
	}
	else
	{
		header("location: ./profile.php?msg=Password Not Changed");		
	}
?>
