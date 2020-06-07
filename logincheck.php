<?php
session_start();
$con= mysqli_connect('localhost','root');
if($con)
{
	echo "Connection successful";
}

$db= mysqli_select_db($con,'curd');
if(isset($_POST['submit']))
{
	$username= $_POST['username'];
	$userpassword=$_POST['userpassword'];
	$sql="select * from tblusers where username='$username'and userpassword='$userpassword'";
	$query= mysqli_query($con,$sql);
	$row= mysqli_num_rows($query);
		if($row==1)
		{

			$_SESSION['username']=$username;
			header('location: main.php');
		}
		else
		{
			header('location:index1.php');
		}
}
?>
