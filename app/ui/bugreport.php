<?php include ("app/appdata/connection.php"); ?>
<?php include ("app/appdata/bt_connect.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Development Requests</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
<?php include ("app/appdata/general.php"); ?>
	<form action="" method="post">
<div class="form-group">
      <label for="disabledSelect">Category</label>
      <select class="form-control" name="txtcategory" id="order_plan">
      <option></option>
      <?php

      $sql1 =mysqli_query($btconnect,"select * from mtck_category_table");
      while($row=mysqli_fetch_array($sql1))
      {
      ?>
      <option value="<?php echo $row["id"]?>"><?php echo $row["name"] ?></option>
      <?php

      }

      ?>
      </select>
    </div>
	<div class="form-group">
      <label for="disabledSelect">Project Name</label>
      <select class="form-control" name="txtprojectname" id="order_plan">
      <option></option>
      <?php

      $sql2 =mysqli_query($btconnect,"select * from mtck_project_table");
      while($row=mysqli_fetch_array($sql2))
      {
      ?>
      <option value="<?php echo $row["id"] ?>"><?php echo $row["name"] ?></option>
      <?php

      }

      ?>
      </select>
    </div>
    <div class="form-group">
      <label for="disabledSelect">Priority</label>
      <select class="form-control" name="txtpriority" id="order_plan">
      <option></option>
      <option value="20">Low</option>
      <option value="30">Normal</option>
      <option value="30">High</option>
      <option value="50">Urgent</option>
      </select>
    </div>
 	<div class="form-group">
      <label for="disabledSelect">Summary</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtsummary">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Nature of Issue</label>
      <textarea class="form-control" rows="4" name="txtnature" data-length="800" placeholder="Please describe the Issue / Change Request in detail."></textarea>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtnatid" value="<?php echo $id; ?>">
      </div>
    </div>

    <div align="center">
    <button type="submit" class="btn btn-success" name="btn_send">Send Request</button>
    </div>
</form>
<br />
<?php

$category= $_POST['txtcategory'];
$project= $_POST['txtprojectname'];
$priority= $_POST['txtpriority'];
$summary= $_POST['txtsummary'];
$issue= $_POST['txtnature'];
$natID= $_POST['txtnatid'];



if(isset ($_POST['btn_Save']))
{

	$sql71 = "INSERT INTO mtck_bug_text_table (description) VALUES ('$issue')";
    if (mysqli_query($btconnect,$sql71))
	{
			$sql72 ="select * from mtck_bug_text_table where description ='$issue' ";
      $records =mysqli_query($connect,$sql72);
      while($package=mysqli_fetch_assoc($records))
      {

      $id=$package["id"];
      }


	}
	else{
		$resu ="<div class='alert alert-success' role='alert'>".mysqli_error($connect)."</div>";
		}
}
?>

            </div>
        </div>
    </div>
