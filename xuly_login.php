<?php
	session_start();
	include("config.php");
	$username =	 $_POST['username'];
	$password = $_POST["password"];
	$sql=mysql_query("select*from user where username='$username' and password='$password'");
	$row=mysql_num_rows($sql);
	if($row==0)
	{
		echo '<script type="text/javascript"> alert("Username or Password is not correct"); history.go(-1)</script>';
	}
	else
	{
		$arr=mysql_fetch_array($sql);
		$_SESSION['u_id']= $arr['id'];
		$_SESSION['user_id'] = $arr['username'];
		$_SESSION['pass']= $arr['password'];
		$_SESSION['hoten']= $arr['hoten'];
		$_SESSION['ngaysinh']= $arr['ngaysinh'];
		$_SESSION['diachi']= $arr['diachi'];
		header("location:index.php");
	}
?>
