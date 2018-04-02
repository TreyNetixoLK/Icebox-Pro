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
			echo ("<div class='row'>
                      <div class='col-md-6 col-md-offset-3'>
                        <div class='jumbotron' align='center'>
					    <h2><b>Oops!!</b>,You are not authorised to be here.</h2>
					    <br />
					     <p>Access to this page have been restricted by the System Administrator.</p>
							 <br />
							 <div align='center'>
							 <h3><span class='label label-danger'>Click on Dashboard to Leave</span></h3>
							 </div>
					    </div>
					  </div>
					 </div>");
			exit();
		}

	}

}
?>
