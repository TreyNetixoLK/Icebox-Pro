<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Create New User Account</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
<?php include ("app/appdata/general.php"); ?>
	<form action="" method="post">
<div class="form-group">
      <label for="disabledSelect">Full Name</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtfname">
    </div>
	<div class="form-group">
      <label for="disabledSelect">Designation</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtdesign">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Email Address</label>
 	  <input type="email" id="disabledTextInput" class="form-control" placeholder="" name="txtemail">
    </div>
 	<div class="form-group">
      <label for="disabledSelect">Username</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtuname">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Password</label>
 	  <input type="password" id="disabledTextInput" class="form-control" placeholder="" name="txtpword">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Access Level</label>
      <select class="form-control" name="projeng">
        <option></option>
    	<option>Administrator</option>
    	<option>Engineer</option>
    	<option>User</option>
      </select>
    </div>
    <div align="center">
    <button type="submit" class="btn btn-success" name="btn_Save">Create User</button>
    </div>
</form>
<br />
<?php

$fname= $_POST['txtfname'];
$designation= $_POST['txtdesign'];
$email= $_POST['txtemail'];
$uname= $_POST['txtuname'];
$pword= $_POST['txtpword'];
$Access= $_POST['projeng'];

$resu = "";
$resu1="";

if(isset ($_POST['btn_Save']))
{
	$passwordmd5 = md5($pword);
	$sql32 = "INSERT INTO tbl_users (F_name,Designation,Email,Username,Password,AccessLevel) VALUES ('$fname','$designation','$email','$uname','$passwordmd5','$Access')";
    if (mysqli_query($connect,$sql32))
	{
			$resu = "<div class='alert alert-success' role='alert'>User Account have been Created</div>";
		    echo $resu;
	}
	else{
		$resu ="<div class='alert alert-success' role='alert'>".mysqli_error($connect)."</div>";
		echo $resu;
		}
}
?>

            </div>
        </div>
    </div>
