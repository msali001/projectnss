<?
	session_start();
	ob_start();
	include("./config.php");
	include("./function.php");
	$user=$_POST['user'];
	$pass=md5($_POST['pass']);
	$category=$_POST['category'];
	if($category=="student")
	{
		$result=mysqli_query($con,"select * from student where studloginid='$user'");
		$row=mysqli_fetch_array($result);
		if($row['studpassword']==$pass)
		{
			$_SESSION['cuser']=$user;
			$_SESSION['role']=$category;
 			$_SESSION['sem']=$row['studsemester'];
			login_log($con,$user);
			header("location: ./student/home.php");			
		}
		else
		{
			header("location: ./index.php?msg=Invalid Username or Password");
		}
	}
	else if($category=="staff")
	{
		$result=mysqli_query($con,"select * from staff where staffloginid='$user'");
		$row=mysqli_fetch_array($result);
		if($row['staffpassword']==$pass)
		{
			$_SESSION['cuser']=$user;
			$_SESSION['role']=$category;
			login_log($con,$user);
			header("location: ./staff/home.php");			
		}
		else
		{
			header("location: ./index.php?msg=Invalid Username or Password");
		}
	}
	else
	{
		$result=mysqli_query($con,"select * from staff where staffloginid='$user'");
		$row=mysqli_fetch_array($result);
		if($row['staffpassword']==$pass)
		{
			$_SESSION['cuser']=$user;
			chk_admin($con,$user);
			login_log($con,$user);
			header("location: ./admin/home.php");			
		}
		else
		{
			header("location: ./index.php?msg=Invalid Username or Password");
		}
	}
?>
