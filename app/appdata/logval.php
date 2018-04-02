<?php
session_start();
$msg="";
$result = "";
$con= mysqli_connect("localhost","root","","netixolk_razor");

if(isset ($_POST['btn_Login']))
{
	if (empty($_POST['txtusername']) || empty($_POST['txtpassword']) )
	{
		$msg= "Please enter valid user credentials";

	}
	else
	{
	$user;$pass;
	$user=$_POST['txtusername'];
	$pass=md5($_POST['txtpassword']);
	$query =mysqli_query($con,"select * from tbl_users where Username = '$user' and Password = '$pass'");

	$rows = mysqli_num_rows($query);
		if ($rows == 1)
		{
		    	sessionlogsuccess($con,$user);
		}
		else
		{
		  	   sessionlogfail($con,$user,$msg);
		  	   $msg = "Incorrect Username or Password";

		}

	mysqli_close($con);
	}
}


function sessionlogsuccess(mysqli $con,$user)

{
    $res="Successful";
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $sql = "insert into tbl_sessions(username,ip_address,Result) values ('$user','$ipaddress','$res')";

if (mysqli_query($con,$sql))
	{
	        $_SESSION ['user']=$user;
			    header("Location:main.php");

	}
	else{
		$resu = mysqli_error($con);

		}
}

function sessionlogfail(mysqli $con,$user,$msg)

{
    $msg = "Incorrect Username or Password";
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $sql = "insert into tbl_sessions(username,ip_address,Result) values ('$user','$ipaddress','$msg')";

if (mysqli_query($con,$sql))
	{

	}
	else{
		$resu = mysqli_error($con);

		}
}

?>
