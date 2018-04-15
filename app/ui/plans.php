<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Create New Plan</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
            <?php include ("app/appdata/general.php"); ?>
 <div class="col-md-5">
              <form action="" method="post" data-parsley-validate="">
 	<div class="form-group">
      <label for="disabledSelect">Plan Name</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtpname" required="">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Wholesale Reference</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtwref" required="">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Alllocated Hosting Space [MB]</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txthostspc" required="">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Allocated Bandwith [MB]</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtbandwith" required="">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Contract Term</label>
      <select id="disabledSelect" class="form-control" name="txtcontractterm" required="">
      <option></option>
      <option>12 Months</option>
      <option>24 Months</option>
      <option>36 Months</option>
      </select>
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Price</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Sri Lankan Rupees" name="txtprice" required="">
    </div>

    <div align="center">
    <button type="submit" class="btn btn-success" name="btn_Create">Create Plan</button>
    <button type="reset" class="btn btn-primary">Reset Fields</button>
    </div>
</form>
<br />
<?php

$planname= $_POST['txtpname'];
$wreference= $_POST['txtwref'];
$hostingspc= $_POST['txthostspc'];
$bandwith= $_POST['txtbandwith'];
$price= $_POST['txtprice'];
$contract = $_POST['txtcontractterm'];
$resu = "";
$resu1="";

if(isset ($_POST['btn_Create']))
{
	$sql = "insert into tbl_packages(pkg_name,whols_ref,alloc_host_spc,alloc_bandwith,price,contract_term) values ('$planname','$wreference','$hostingspc','$bandwith','$price','$contract')";
if (mysqli_query($connect,$sql))
	{
		$resu = "<div class='alert alert-success' role='alert' style='width: 500px;'>The new Plan has been created.</div>";

	}
	else{
		$resu = mysqli_error($connect);

		}
}
?>
 <?php
	  echo $resu;
	  ?>
</div>
 <div class="col-md-7">
   <table class="table table-striped">
 <thead>
  <tr>
  	<th><b>Plan Name</b></th>
  	<th><b>Contract Term</b></th>
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
		  echo "<td>".$package["contract_term"]."</td>";
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
