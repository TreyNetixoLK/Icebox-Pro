<?php include ("app/appdata/connection.php"); ?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Agent Sales Report</h2>
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
    <th><b>Dealer Code</b></th>
  	<th><b>Agent Name</b></th>
  	<th><b>Number of Orders</b></th>
  	<th><b>Total Value</b></th>
  	<th><b>Commission</b></th>
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
