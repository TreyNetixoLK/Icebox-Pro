<?php include ("app/appdata/connection.php"); ?>
<?php // Turn off all error reporting
error_reporting(0); ?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Welcome to ICEBOX Pro !</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
              <div class="col-md-4">
              <form action="" method="post">
 	<div class="form-group">
      <label for="disabledSelect">Netixo Reference</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtnref">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Schedule Completion Date (ETA)</label>
 	  <input type="date" id="disabledTextInput" class="form-control" placeholder="" name="txtdate">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Project Engineer</label>
      <select class="form-control" name="projeng">
        <option></option>
    	<?php

		  $sql =mysqli_query($connect,"select * from tbl_users where Designation ='Project Engineer' OR Designation = 'Director'");
		  while($row=mysqli_fetch_array($sql))
		  {
		?>
		<option><?php echo $row["F_name"]?></option>
		  <?php

		  }

		  ?>
      </select>
    </div>
    <div align="center">
    <button type="submit" class="btn btn-success" name="btn_Save">Save Changes</button>
    <button type="reset" class="btn btn-primary">Reset Fields</button>
    </div>
</form>
</div>
<div class="col-md-8">
<h3 align="center"> All  Pending Orders</h3>
<br />
<table class="table table-striped">
 <thead>
  <tr>
  	<th><b>Netixo Reference</b></th>
  	<th><b>Segment</b></th>
  	<th><b>Customer / Company Name</b></th>
  	<th><b>Plan Name</b></th>
  	<th><b>Comments</b></th>
  </tr>
  </thead>
  <tbody>
  <?php

	  $tbsql="SELECT * FROM tbl_orders where Status ='Pending'";

	  $records =mysqli_query($connect,$tbsql);
      while($package=mysqli_fetch_assoc($records))
	  		{
		  echo "<tr>";
		  echo "<td>".$package["OrderID"]."</td>";
		  echo "<td>".$package["OrdType"]."</td>";
		  echo "<td>".$package["CustName"]."</td>";
		  echo "<td>".$package["HostingPlan"]."</td>";
		  echo "<td>".$package["Comments"]."</td>";
		  echo "</tr>";


	  		} // end While loop

	  ?>
  </tbody>
</table>
</div>

            </div>
        </div>
    </div>