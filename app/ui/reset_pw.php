<?php include ("app/appdata/connection.php"); ?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Reset Password</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
              <?php include ("app/appdata/general.php"); ?>
              <div class="col-md-1"></div>
  <div class="col-md-10">

	<br />
	<div style="width: 800px;">
		<form class="form-horizontal" method="post" action="">

  <div class="form-group">
     <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
      <div class="col-sm-10">
     <select class="form-control" name="txtuser">
        <option></option>
    	<?php

		  $sql =mysqli_query($connect,"select * from tbl_users");
		  while($row=mysqli_fetch_array($sql))
		  {
		?>
		<option><?php echo $row["Username"]?></option>
		  <?php

		  }

		  ?>
      </select>
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="txtpword">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Confirm New Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="txtconfirm" >
    </div>
  </div>
  <div class="form-group" align="center">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="btnChange">Change Password</button>
      <button type="reset" class="btn btn-default">Reset All fields</button>
    </div>
  </div>
</form>
<?php
error_reporting(0);
?>
<?php

$pwd= md5($_POST['txtpword']);
$con= $_POST['txtconfirm'];
$val = $_POST ['txtuser'];
$resu = "";
$resu1="";

if(isset ($_POST['btnChange']))
{
	$sql88 = "Update tbl_users set Password='$pwd' where Username='$val'";

	if (($_POST['txtpword']) != ($_POST['txtconfirm']))
	{
		$resu1 = "The Password you have entered does not match";
		echo "<div class='alert alert-warning' role='alert'>".$resu1."</div>";
	}

	else if (mysqli_query($connect,$sql88))
	{
		$resu = "Your Password has been changed.";
		echo "<div class='alert alert-success' role='alert'>".$resu."</div>";
	}
	else{

		echo  mysqli_error($connect);

		}
}
?>

  </div>
  <div class="col-md-1"></div>

            </div>
        </div>
    </div>
