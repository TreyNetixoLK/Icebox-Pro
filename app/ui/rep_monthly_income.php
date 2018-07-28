<?php include ("app/appdata/connection.php"); ?>
<div id="global">
    <div class="container-fluid cm-container-white">
      <h2 style="margin-top:0;">Total Income Report</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
              <?php include ("app/appdata/general.php"); ?>
<br />
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  	<table class="table table-striped">
 <thead>
  <tr>
  	<th><b>Netixo Reference</b></th>
  	<th><b>Customer / Company Name</b></th>
  	<th><b>Order Type</b></th>
  	<th><b>Plan Name</b></th>
  	<th><b>Price</b></th>
  </tr>
  </thead>
  <tbody>
  <?php

	  $tbsql="select OrderID,CustName,OrdType,pkg_name,price FROM tbl_orders, tbl_packages where HostingPlan = pkg_name and net_status = 'Active'";

	  $records =mysqli_query($connect,$tbsql);
      while($package=mysqli_fetch_assoc($records))
	  		{
		  echo "<tr>";
		  echo "<td>".$package["OrderID"]."</td>";
			echo "<td>".$package["CustName"]."</td>";
      echo "<td>".$package["OrdType"]."</td>";
		  echo "<td>".$package["pkg_name"]."</td>";
		  echo "<td>".$package["price"]."</td>";
		  echo "</tr>";


	  		} // end While loop

	  ?>
  </tbody>
</table>

  </div>
  <div class="col-md-1"></div>
</div>

            </div>
        </div>
    </div>
