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
            <div class="col-md-4">
<?php include ("app/appdata/general.php"); ?>
	<form action="" method="post" data-parsley-validate="">
<div class="form-group">
      <label for="disabledSelect">Full Name</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtfname" required="">
    </div>
	<div class="form-group">
      <label for="disabledSelect">Designation</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtdesign" required="">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Email Address</label>
 	  <input type="email" id="disabledTextInput" class="form-control" placeholder="" name="txtemail" required="">
    </div>
 	<div class="form-group">
      <label for="disabledSelect">Username</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtuname" required="">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Password</label>
 	  <input type="password" id="disabledTextInput" class="form-control" placeholder="" name="txtpword" required="">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Role</label>
      <select class="form-control" name="projeng" required="">
        <option></option>
    	<option>Administrator</option>
    	<option>Engineer</option>
      <option>Manager</option>
    	<option>User</option>
      </select>
    </div>
  </div>

<div class="col-md-2">
    <label for="disabledSelect">Access Level</label>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Customer Management
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="checkbox">
          <label><input type="checkbox" value="">View on Navigator</label><br />
           <label><input type="checkbox" value="">Create Customer Profile</label><br />
           <label><input type="checkbox" value="">Edit Customer Details</label><br />
           <label><input type="checkbox" value="">Customer List</label><br />
         </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Sales Management
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="checkbox">
          <label><input type="checkbox" value="">View on Navigator</label><br />
           <label><input type="checkbox" value="">Create New Order</label><br />
           <label><input type="checkbox" value="">Search Order</label><br />
           <label><input type="checkbox" value="">Generate Quotes</label><br />
         </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
          Project Management
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="checkbox">
          <label><input type="checkbox" value="">View on Navigator</label><br />
           <label><input type="checkbox" value="">Search Projects</label><br />
           <label><input type="checkbox" value="">Manage Projects</label><br />
           <label><input type="checkbox" value="">Pending Projects</label><br />
           <label><input type="checkbox" value="">Project Board</label><br />
         </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
          Network Management
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="checkbox">
          <label><input type="checkbox" value="">View on Navigator</label><br />
           <label><input type="checkbox" value="">Create New Server</label><br />
           <label><input type="checkbox" value="">Manage Services</label><br />
           <label><input type="checkbox" value="">Wholesale Network Status</label><br />
           <label><input type="checkbox" value="">Search Engine Optimize</label><br />
         </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Development
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="checkbox">
          <label><input type="checkbox" value="">View on Navigator</label><br />
           <label><input type="checkbox" value="">Create Customer Profile</label><br />
           <label><input type="checkbox" value="">Edit Customer Details</label><br />
           <label><input type="checkbox" value="">Customer List</label><br />
         </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Finance Management
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="checkbox">
          <label><input type="checkbox" value="">View on Navigator</label><br />
           <label><input type="checkbox" value="">Create Customer Profile</label><br />
           <label><input type="checkbox" value="">Edit Customer Details</label><br />
           <label><input type="checkbox" value="">Customer List</label><br />
         </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Report Management
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="checkbox">
          <label><input type="checkbox" value="">View on Navigator</label><br />
           <label><input type="checkbox" value="">Create Customer Profile</label><br />
           <label><input type="checkbox" value="">Edit Customer Details</label><br />
           <label><input type="checkbox" value="">Customer List</label><br />
         </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          User Management
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <div class="checkbox">
          <label><input type="checkbox" value="">View on Navigator</label><br />
           <label><input type="checkbox" value="">Create Customer Profile</label><br />
           <label><input type="checkbox" value="">Edit Customer Details</label><br />
           <label><input type="checkbox" value="">Customer List</label><br />
         </div>
      </div>
    </div>
  </div>
</div>

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
