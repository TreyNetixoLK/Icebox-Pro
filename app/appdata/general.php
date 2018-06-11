<?php
include("connection.php");
admin_protect();

function admin_protect()
{
	global $connect;
	$user = $_SESSION ['user'];
	$sql9 =mysqli_query($connect,"select * from tbl_users where Username ='$user'");

	while($row=mysqli_fetch_array($sql9))
	{
		$users = $row[6];


        if ($users == "User")
		{
				header("Location:main.php?page=restricted");

		
		}

	}

}
?>
