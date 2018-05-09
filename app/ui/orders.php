<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);

$ordernumb = $_POST[txtordernumber];
?>

<?php
$tbsql="SELECT * FROM tbl_orders where OrderID = '$ordernumb'";

$records =mysqli_query($connect,$tbsql);
while($package=mysqli_fetch_assoc($records))
{

$nic=$package["NIC_NO"];
$ordtype = $package["OrdType"];
$comapany =$package["CustName"];
$orderReceived =$package["Ord_Rec_Date"];
$ETA =$package["ETA"];
$plan=$package["HostingPlan"];
$cterm =$package["contract_term"];
$pengineer =$package["ProjectEngineer"];
$address1 = $package["address1"];
$address2 = $package["address2"];
$address3 = $package["address3"];
$address4 = $package["address4"];
$country =  $package["country"];
$BReg =  $package["BusinessReg"];
$Acontact=  $package["SiteContact"];
$email= $package["Email"];
$phone= $package["ContactNo"];
$domain=$package["DomainName"];
$AM =$package["Createdby"];
$status=$package["Status"];
$platform=$package["platform"];
$Dspace=$package["DiskSpace"];
$cpurl=$package["portalurl"];
$DNS1=$package["DNSSID1"];
$DNS2=$package["DNSSID2"];
$MIP=$package["MIPAdd"];
$server=$package["Server"];
$Bandwith=$package["Bandwith"];
$serv_stat =$package['net_status'];

$appraisal = $package["appraisal"];
$ui = $package["ui_design"];
$db = $package["db_design"];
$devop = $package["development"];
$testing = $package["testing"];
$completion = $package["completion"];

} // end While loop

?>
<style>
/** Colors **/
ol.progress-track {
  display: table;
  list-style-type: none;
  margin: 0;
  padding: 2em 1em;
  table-layout: fixed;
  width: 100%;
}
ol.progress-track li {
  display: table-cell;
  line-height: 3em;
  position: relative;
  text-align: center;
}
ol.progress-track li .icon-wrap {
  border-radius: 50%;
  top: -1.5em;
  color: #fff;
  display: block;
  height: 2.5em;
  margin: 0 auto -2em;
  left: 0;
  right: 0;
  position: absolute;
  width: 2.5em;
}
ol.progress-track li .icon-check-mark,
ol.progress-track li .icon-down-arrow {
  height: 25px;
  width: 15px;
  display: inline-block;
  fill: currentColor;
}
ol.progress-track li .progress-text {
  position: relative;
  top: 10px;
}
ol.progress-track li.progress-done {
  border-top: 7px solid #87ba51;
  transition: border-color 1s ease-in-out;
  -webkit-transition: border-color 1s ease-in-out;
  -moz-transition: border-color 1s ease-in-out;
}
ol.progress-track li.progress-done .icon-down-arrow {
  display: none;
}
ol.progress-track li.progress-done.progress-current .icon-wrap {
  background-color: #0070c0;
}
ol.progress-track li.progress-done.progress-current .icon-wrap .icon-check-mark {
  display: none;
}
ol.progress-track li.progress-done.progress-current .icon-wrap .icon-down-arrow {
  display: block;
}
ol.progress-track li.progress-done .icon-wrap {
  background-color: #4a6a28;
  border: 5px solid #87ba51;
}
ol.progress-track li.progress-todo {
  border-top: 7px solid #ddd;
  color: black;
}
ol.progress-track li.progress-todo .icon-wrap {
  background-color: #fff;
  border: 5px solid #ddd;
  border-radius: 50%;
  bottom: 1.5em;
  color: #fff;
  display: block;
  height: 2.5em;
  margin: 0 auto -2em;
  position: relative;
  width: 2.5em;
}
ol.progress-track li.progress-todo .icon-wrap .icon-check-mark,
ol.progress-track li.progress-todo .icon-wrap .icon-down-arrow {
  display: none;
}


</style>

<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">#N<?php echo $ordernumb; ?>-<?php echo $comapany; ?> </h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">

              <div class="col-md-12 text-center article-v1-title"><h1>Project Milestone</h1></div>
              <div class="col-md-12  article-v1-body">
                <br /><br />
              <!-- Progress Bar -->

              <ol class="progress-track">
<li class="<?php echo $appraisal; ?>">
<center>
<div class="icon-wrap">
  <svg class="icon-state icon-check-mark">
    <use xlink:href="#icon-check-mark"></use>
  </svg>

  <svg class="icon-state icon-down-arrow">
    <use xlink:href="#icon-down-arrow"></use>
  </svg>
</div>
<span class="progress-text">Appraisal</span>
</center>
</li>

<li class="<?php echo $ui; ?>">
<center>
<div class="icon-wrap">
  <svg class="icon-state icon-check-mark">
    <use xlink:href="#icon-check-mark"></use>
  </svg>

  <svg class="icon-state icon-down-arrow">
    <use xlink:href="#icon-down-arrow"></use>
  </svg>
</div>
<span class="progress-text">UI Design</span>
</center>
</li>

<li class="<?php echo $db; ?>">
<center>
<div class="icon-wrap">
  <svg class="icon-state icon-check-mark">
    <use xlink:href="#icon-check-mark"></use>
  </svg>

  <svg class="icon-state icon-down-arrow">
    <use xlink:href="#icon-down-arrow"></use>
  </svg>
</div>
<span class="progress-text">DB Design</span>
</center>
</li>

<li class="<?php echo $devop; ?>">
<center>
<div class="icon-wrap">
  <svg class="icon-state icon-check-mark">
    <use xlink:href="#icon-check-mark"></use>
  </svg>

  <svg class="icon-state icon-down-arrow">
    <use xlink:href="#icon-down-arrow"></use>
  </svg>
</div>
<span class="progress-text">Development</span>
</center>
</li>
<li class="<?php echo $testing; ?>">
<center>
<div class="icon-wrap">
  <svg class="icon-state icon-check-mark">
    <use xlink:href="#icon-check-mark"></use>
  </svg>

  <svg class="icon-state icon-down-arrow">
    <use xlink:href="#icon-down-arrow"></use>
  </svg>
</div>
<span class="progress-text">Testing</span>
</center>
</li>
<li class="<?php echo $completion; ?>">
<center>
<div class="icon-wrap">
  <svg class="icon-state icon-check-mark">
    <use xlink:href="#icon-check-mark"></use>
  </svg>

  <svg class="icon-state icon-down-arrow">
    <use xlink:href="#icon-down-arrow"></use>
  </svg>
</div>
<span class="progress-text">Completed</span>
</center>
</li>
</ol>

              <!-- end of Progress Bar -->
              <div class="col-md-12">
                <!-- Order Information Section -->
                <h3><b>Project Information</b></h3>
                <br />
                <div class="table-responsive-sm">
                <table class="table" border="0">
                  <tr>
                    <td><strong>Netixo Reference</strong></td>
                    <td>N<?php echo $ordernumb; ?></td>
                    <td><strong>Order Type</strong></td>
                    <td><?php echo $ordtype; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Project Received on</strong></td>
                    <td><?php echo $orderReceived; ?></td>
                    <td><strong>Estimated Completion Date</strong></td>
                    <td><?php echo $ETA; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Plan Name</strong></td>
                    <td><a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><?php echo $plan; ?></a></td>
                    <td><strong>Contract Term</strong></td>
                    <td><?php echo $cterm; ?></td>
                  </tr>
                  <tr>
                  <tr>
                    <td><strong>Status</strong></td>
                    <td>
                      <?php
              $act = 'Completed';
            $pending = 'Pending';
              $prog = 'Progressing';
              $hold = 'On Hold';

          if ($status == $act)
          {
            echo "<h4><span class='label label-success'>".$status."</span></h4>";
          }
            else if ($status == $pending)
          {
            echo "<h4><span class='label label-default'>".$status."</span></h4>";
          }
          else if ($status == $prog)
          {
            echo "<h4><span class='label label-primary'>".$status."</span></h4>";
          }
          else if ($status == $hold)
          {
            echo "<h4><span class='label label-warning'>".$status."</span></h4>";
          }
          else
          {
            echo "<h4><span class='label label-danger'>".$status."</span></h4>";
          }
          ?>
                    </td>
                    <td><strong>Project Engineer</strong></td>
                    <td><?php echo $pengineer; ?></td>
                  </tr>
                  <tr>
                    <td colspan="4"></td>
                  </tr>
                </table>
                </div>
                <!-- end of Order Information -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
              </div>
              <br />
              <div class="col-md-12">
                <!-- Order Information Section -->
                <h3><b>Customer Information</b></h3>
                <br />
                <div class="table-responsive-sm">
                <table class="table" border="0">
                  <tr>
                    <td><strong>Company Name</strong></td>
                    <td><?php echo $comapany; ?></td>
                    <td><strong>Business Registration No.</strong></td>
                    <td><?php echo $BReg; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Permanent Address</strong></td>
                    <td><?php echo $address1; ?></td>
                    <td><strong>Authorised Contact Person</strong></td>
                    <td><?php echo $Acontact; ?></td>
                  </tr>
                  <tr>
                    <td><strong></strong></td>
                    <td><?php echo $address2; ?></td>
                    <td><strong>Email Address</strong></td>
                    <td><i><a href="emailto:<?php echo $email; ?>"><?php echo $email; ?></a></i></td>
                  </tr>
                  <tr>
                    <td><strong></strong></td>
                    <td><?php echo $address3; ?></td>
                    <td><strong>Contact Number</strong></td>
                    <td><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></td>
                  </tr>
                  <tr>
                    <td><strong></strong></td>
                    <td><?php echo $address4; ?></td>
                    <td><strong>Account Manager</strong></td>
                    <td><?php echo $AM; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Country</strong></td>
                    <td><?php echo $country; ?></td>
                    <td><strong>Identification Number</strong></td>
                    <td><?php echo $nic; ?></td>
                  </tr>
                  <tr>
                    <td colspan="4"></td>
                  </tr>
                </table>
                </div>
                <!-- end of Order Information -->
              </div>

              <br />
              <div class="col-md-12">
                <!-- Order Information Section -->
                <h3><b>Service Information</b></h3>
                <br />
                <div class="table-responsive-sm">
                <table class="table" border="0">
                  <tr>
                    <td><strong>Domain Name</strong></td>
                    <td><a href="https://<?php echo $domain; ?>" target="_blank"><?php echo $domain; ?></a></td>
                    <td><strong>Server Name</strong></td>
                    <td><?php echo $server; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Platform</strong></td>
                    <td><?php echo $platform; ?></td>
                    <td><strong>Main IP</strong></td>
                    <td><?php echo $MIP; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Server Space</strong></td>
                    <td><?php echo $Dspace; ?>&nbsp; MB</td>
                    <td><strong>DNS Server ID [1]</strong></td>
                    <td><?php echo $DNS1; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Monthly Bandwith</strong></td>
                    <td><?php echo $Bandwith; ?>&nbsp; MB</td>
                    <td><strong>DNS Server ID [2]</strong></td>
                    <td><?php echo $DNS2; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Status</strong></td>
                    <td>
                      <?php
              $act = 'Active';
            $pending = 'Pending';
              $prog = 'Cancelled';

          if ($serv_stat == $act)
          {
            echo "<h4><span class='label label-success'>".$serv_stat."</span></h4>";
          }
            else if ($serv_stat == $pending)
          {
            echo "<h4><span class='label label-default'>".$serv_stat."</span></h4>";
          }
          else if ($serv_stat == $prog)
          {
            echo "<h4><span class='label label-warning'>".$serv_stat."</span></h4>";
          }
          else
          {
            echo "<h4><span class='label label-danger'>".$serv_stat."</span></h4>";
          }
          ?>
                    </td>
                    <td><strong>Control Panel</strong></td>
                    <td><a href="https:<?php echo $cpurl; ?>" target="_blank"><?php echo $cpurl; ?></a></td>
                  </tr>
                  <tr>
                    <td colspan="4"></td>
                  </tr>
                </table>
                </div>
                <!-- end of Order Information -->
              </div>
              <br/ >
              <div class="col-md-12">
                <!-- Add Notes Section -->
                <div class="col-md-6">
                  <h3><b>Add Quick Notes</b></h3>
                  <br />
                  <div class="panel panel-default">
                      <div class="panel-body">
                      <form action="" method="post">
                           <input type="hidden" id="disabledTextInput" class="form-control" name="txtref" value="<?php if(isset($ordernumb)){ echo($ordernumb); } ?>">
                           <label for="disabledTextInput">Add Comment</label>
                            <textarea class="form-control" rows="3" name="txtcomment"></textarea><br />
                            <div align="center">
                            <button type="submit" class="btn btn-success" name="btn_addNote" >Save Comment</button></div>
                          </form>
                          <?php
                          $notes = $_POST ['txtcomment'];
                          $val = $_SESSION ['user'];
                          $Ref = $_POST['txtref'];

                          if(isset ($_POST['btn_addNote']))
                          {
                          $sql3 = "insert into tbl_ordernotes(Nref,Username,comments) values ('$Ref','$val','$notes')";

                          if (mysqli_query($connect,$sql3))
                          {

                          }
                          else{
                          $resu = mysqli_error($connect);
                          echo $resu;
                          }
                          }
                          ?>

    </div>
</div>
                </div>
                <!-- End of Add Notes Section -->
                <div class="col-md-6">
                <!-- Order Notes Section -->
                <h3><b>Project History</b></h3>
                <br />
                <div class="responsive-table">
<table class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th>Date and Time</th>
<th>user</th>
<th>Comments</th>
</tr>
</thead>
<tbody>
  <?php

  	  $tbsql="SELECT * FROM tbl_ordernotes where Nref=$ordernumb";

  	  $records =mysqli_query($connect,$tbsql);
        while($package=mysqli_fetch_assoc($records))
  	  		{
  		  echo "<tr>";
  		  echo "<td>".$package["date"]."</td>";
  		  echo "<td>".$package["Username"]."</td>";
  		  echo "<td>".$package["comments"]."</td>";
  		  echo "</tr>";


  	  		} // end While loop

  	  ?>
</tbody>
</table>
</div>
                <!-- end of Order Notes -->
              </div>
              </div>
            </div>
            <div class="col-md-12 article-v1-footer">


         </div>
       </div>
       </div>
      </div>
  </div>
  <!-- end: content -->

            </div>
        </div>
    </div>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
