<?
	session_start();
	ob_start();
	include("./config.php");
	include("./function.php");
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$category=$_POST['category'];
	if($category=="student")
	{
		$result=mysqli_query($con,"select * from student where studloginid='$user'");
		$row=mysqli_fetch_array($result);
		if($row['studpassword']==$pass)
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
	}
	else
	{
		$result=mysqli_query($con,"select * from staff where staffloginid='$user'");
		$row=mysqli_fetch_array($result);
		if($row['staffpassword']==$pass)
		{
<<<<<<< HEAD
			$_SESSION['cuser']=$user;			
=======
			$_SESSION['cuser']=$user;
			$_SESSION['stfid']=$row['staffid'];
			echo $_SESSION['stfid'];
>>>>>>> 4004148899381ce22e9cf4857169e155a8c976d3
			chk_admin($con,$user);
			login_log($con,$user);
			header("location: ./home.php");			
		}
		else
		{
			header("location: ./index.php");
		}
	}
?>
