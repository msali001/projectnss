<?
//error_reporting(E_ALL ^ E_NOTICE);
        include("config.php");
	function chk_admin($con,$user)
	{
		$result=mysqli_query($con,"select staffrole from staff where staffloginid='$user'");
		$row=mysqli_fetch_array($result);
		if($row['staffrole']=="admin" || $row['staffrole']=="Admin")
		{
			$_SESSION['role']="admin";
		}
		else
	        	{
			$_SESSION['role']="other";
		}
	}
	function chk_user()
	{
		session_start();
		ob_start();
		if($_SESSION['cuser']=="")
		{
			header("location: ./logout.php");
		}
	}
	function login_log($con,$user)
	{
		//$date=date("d/m/Y");
		//$time=date("H:i:s");
		mysqli_query($con,"insert into logtable (loginid,logindate,logintime) values('$user',CURDATE(),CURRENT_TIME())");
	}
	function logout_log($con,$usr)
	{
		$date=date("d/m/Y");
		$time=date("H:i:s");
		$result=mysqli_query($con,"select logid from logtable where loginid='$usr' order by logid desc");
		$row=mysqli_fetch_array($result);
		$logid=$row['logid'];
		mysqli_query($con,"update logtable set logouttime='$time', logoutdate='$date' where loginid='$usr' and logid='$logid'");
	}
	function get_staffname($con,$user)
	{
			$result=mysqli_query($con,"select * from staff where staffloginid='$user'");
			$row=mysqli_fetch_array($result);
			$name=$row['staffsurname']." ".$row['stafffirstname'];
			return $name;
	}
	function get_studname($con,$user)
	{
			$result=mysqli_query($con,"select * from student where studloginid='$user'");
			$row=mysqli_fetch_array($result);
			$name=$row['studsurname']." ".$row['studfirstname'];
			return $name;
	}
	function get_blogreply($con,$blogid)
	{
		$result=mysqli_query($con,"select * from blogreply where blogid='$blogid'");
		$row=mysqli_num_rows($result);
		return $row;
	}
	function blog_visit($con,$bid)
	{
		$result=mysqli_query($con,"select blogvisit from blog where blogid='$bid'");
		$row=mysqli_fetch_array($result);
		$visit=$row['blogvisit'];
		$visit++;
		mysqli_query($con,"update blog set blogvisit=$visit where blogid=$bid");
	}
?>
