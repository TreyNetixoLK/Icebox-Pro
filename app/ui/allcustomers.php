<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>

<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">All Customers</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">

              <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                      <thead>
                          <tr>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>NIC Number</th>
                              <th>Email Address</th>
                              <th>Contact Number</th>
                              <th>created By</th>
                          </tr>
                      </thead>
                      <tbody>
                         <?php

$tbsql="SELECT * FROM tbl_customers";

$records =mysqli_query($connect,$tbsql);
while($package=mysqli_fetch_assoc($records))
{
echo "<tr>";
echo "<td>".$package["first_name"]."</td>";
echo "<td>".$package["last_name"]."</td>";
echo "<td>".$package["nic_number"]."</td>";
echo "<td>".$package["email_address"]."</td>";
echo "<td>".$package["contact_number"]."</td>";
echo "<td>".$package["created_by"]."</td>";
echo "</tr>";

} // end While loop

?>
                      </tbody>
                  </table>
              </div>

            </div>
        </div>
    </div>
