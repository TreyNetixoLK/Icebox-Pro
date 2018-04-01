<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Welcome to ICEBOX Pro !</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
            <?php include ("app/appdata/general.php"); ?>
 <div class="col-md-5">
              <form action="" method="post">
 	<div class="form-group">
      <label for="disabledSelect">Plan Name</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtpname">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Wholesale Reference</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtwref">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Alllocated Hosting Space [MB]</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txthostspc">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Allocated Bandwith [MB]</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtbandwith">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Contract Term</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtbandwith">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Price</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Sri Lankan Rupees" name="txtprice">
    </div>

    <div align="center">
    <button type="submit" class="btn btn-success" name="btn_Create">Create Plan</button>
    <button type="reset" class="btn btn-primary">Reset Fields</button>
    </div>
</form>
</div>
 <div class="col-md-7">
   <table class="table table-striped">
 <thead>
  <tr>
  	<th><b>Plan Name</b></th>
  	<th><b>Wholesale Reference</b></th>
  	<th><b>Price [LKR]</b></th>
  </tr>
  </thead>
  <tbody>
  <?php

	  $tbsql="SELECT * FROM tbl_packages";

	  $records =mysqli_query($connect,$tbsql);
      while($package=mysqli_fetch_assoc($records))
	  		{
		  echo "<tr>";
		  echo "<td>".$package["pkg_name"]."</td>";
		  echo "<td>".$package["whols_ref"]."</td>";
		  echo "<td>".$package["price"]."</td>";
		  echo "</tr>";


	  		} // end While loop

	  ?>
  </tbody>
</table>
</div>
            </div>
        </div>
    </div>
