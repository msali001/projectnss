<?
	session_start();
	ob_start();
	include("./config.php");
	include("./function.php");
	$user=$_POST['user'];
	$pass=md5($_POST['pass']);
	$category=$_POST['category'];
	$result=mysqli_query($con,"select * from staff where staffloginid='$user'");
	$row=mysqli_fetch_array($result);
	if($row['staffpassword']==$pass and $row['staffrole']=='Admin')
	{
			$_SESSION['cuser']=$user;
			$_SESSION['role']=$category;
			login_log($con,$user);
			header("location: ./home.php");			
	}
	else
	{
			header("location: ./index.php");
	}
	
?>
