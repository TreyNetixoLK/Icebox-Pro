<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php


 if(isset($_POST['btn_search']))
 {
    $search =$_POST['txtsearch'];
    $sql="SELECT * FROM tbl_orders WHERE OrderID=".$search;

    if($result=mysqli_query($connect,$sql))
    {

      if(mysqli_num_rows($result)>0)
      {
       while($row=mysqli_fetch_array($result))
       {
        $name=$row[1];
         $hostingspace = $row[19];
         $bandwith = $row[18];
         $email = $row[22];
         $mainip = $row[28];
         $cpanelun = $row[20];
         $cpanelpw = $row[21];
         $cpanelurl = $row[25];
         $DDNS1 = $row[26];
         $DDNS2 = $row[27];
         $Platform =$row[17];
         $Server = $row[29];
         $Nstatus = $row[31];

       }
      }
     else
      {
       $msg="<h4 style=color:red;>Invalid order reference. Please check the reference and try again.</h4>";

      }

    }
    else
    {
     $msg ="<h3 style=color:red;>".mysqli_error($connect) ."</h3>";

    }
 }
 ?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Manage Services</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
              <br />
                <?php include ("app/appdata/general.php"); ?>
              <div align="center">
              <form class="form-inline" method="post" action="" data-parsley-validate="">
         <div class="form-group">
<input type="text" id="disabledTextInput" class="form-control" placeholder="Reference without the prefix 'N'" style="width: 250px;" name ="txtsearch" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>"> &nbsp;
<button type="submit" class="btn btn-primary" name="btn_search">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         </div>

        <div class="form-group">
   <label for="inputEmail3" class="col-sm-4 control-label">Company Name</label>
        <div class="col-sm-7">
   <input type="text" class="form-control" id="inputEmail3" placeholder="Customer Name" style="width: 400px;" name="txtcomp" value="<?php echo $name;  ?>" readonly>
        </div>
         </div>
 </form>
 <br />
<?php  echo $msg; ?>
</div>

       <br />
       <div class="row">
       <form class="form-horizontal" action="" method="post">
       <div class="col-sm-6">

       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">Hosting Space</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" id="inputEmail3" placeholder="Values in MB" name="txthost" value="<?php echo $hostingspace; ?>" required="">
       </div>
       </div>
       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">Bandwith</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" id="inputEmail3" placeholder="Values in MB" name="txtbandwith" value="<?php echo $bandwith; ?>" required ="">
       </div>
       </div>
       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">Email Accounts</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtemails" value="<?php echo $email; ?>" required="">
       </div>
       </div>
       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">Main IP Address</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" id="inputEmail3" placeholder="Eg: 192.168.1.1" name="txtip" value="<?php echo $mainip; ?>" required="">
       </div>
       </div>
       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">Server Name</label>
       <div class="col-sm-6">
       <select class="form-control" name="txtserver" width="200px" required="">
       <option></option>
       <?php

       $sql =mysqli_query($connect,"select * from tbl_server");
       while($row=mysqli_fetch_array($sql))
       {
       ?>
       <option <?php if (!empty($Server) && $Server == $row["serv_name"])  echo 'selected = "selected"'; ?>><?php echo $row["serv_name"]?></option>
       <?php

       }

       ?>
       </select>
       </div>
       </div>
       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">Service Status</label>
       <div class="col-sm-6">
         <select class="form-control" name="txtstat" required="">
         <option></option>
         <option <?php if (!empty($Nstatus) && $Nstatus == 'Active')  echo 'selected = "selected"'; ?>>Active</option>
         <option <?php if (!empty($Nstatus) && $Nstatus == 'Cancelled')  echo 'selected = "selected"'; ?>>Cancelled</option>
         <option <?php if (!empty($Nstatus) && $Nstatus == 'Pending')  echo 'selected = "selected"'; ?>>Pending</option>
         <option <?php if (!empty($Nstatus) && $Nstatus == 'Permanently Deactivated')  echo 'selected = "selected"'; ?>>Permanently Deactivated</option>
         </select>
       </div>
       </div>
           </div>
       <div class="col-sm-6">

       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">CPanel Username</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtcpuname"  value="<?php echo $cpanelun; ?>"required="">
       </div>
       </div>
       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">CPanel Password</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtcpwrod"  value="<?php echo $cpanelpw; ?>" required="">
       </div>
       </div>
       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">CPanel Portal URL</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" id="inputEmail3" placeholder="https://" name="txturl"  value="<?php echo $cpanelurl; ?>" required="">
       </div>
       </div>
       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">DNS Server [Primary]</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtdns1"  value="<?php echo $DDNS1; ?>" required="">
       </div>
       </div>
       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">DNS Server [Redundant]</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtdns2"  value="<?php echo $DDNS2; ?>" required="">
       </div>
       </div>
       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label">Platform</label>
       <div class="col-sm-6">
       <select class="form-control" name="txtplat" required="">
       <option></option>
       <option <?php if (!empty($Platform) && $Platform == 'Cpanel')  echo 'selected = "selected"'; ?>>Cpanel</option>
       <option <?php if (!empty($Platform) && $Platform == 'Plesk')  echo 'selected = "selected"'; ?>>Plesk</option>
       <option <?php if (!empty($Platform) && $Platform == 'Azure')  echo 'selected = "selected"'; ?>>Azure</option>
       <option <?php if (!empty($Platform) && $Platform == 'AWS')  echo 'selected = "selected"'; ?>>AWS</option>
       </select>
       </div>
       </div>
       <div class="form-group">
       <label for="inputEmail3" class="col-sm-4 control-label"></label>
       <div class="col-sm-6">
       <input type="hidden" class="form-control" id="inputEmail3" placeholder="" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>" name="txtrr">
       </div>
       </div>

       </div>
          <div align="center">
       <button type="submit" class="btn btn-success" name="Btn_Save">Save Configuration</button>&nbsp;
       <br />
       <br />
       </div>
           </form>
           <?php


       if(isset ($_POST['Btn_Save']))
       {

       $search2 =$_POST['txtrr'];
       $hosting= $_POST['txthost'];
       $bandwith= $_POST['txtbandwith'];
       $emailc= $_POST['txtemails'];
       $mip= $_POST['txtip'];
       $server= $_POST['txtserver'];
       $stat =$_POST['txtstat'];
       $cpun=$_POST['txtcpuname'];
       $cppw=$_POST['txtcpwrod'];
       $url=$_POST['txturl'];
       $dns1=$_POST['txtdns1'];
       $dns2=$_POST['txtdns2'];
       $platf =$_POST['txtplat'];
       $resu = "";

       $sql77 = "update tbl_orders set DiskSpace ='$hosting',
       Bandwith ='$bandwith',
       CPUname ='$cpun',
       CPPword ='$cppw',
       EmailAccounts ='$emailc',
       portalurl ='$url',
       DNSSID1 ='$dns1',
       DNSSID2 ='$dns2',
       MIPAdd ='$mip',
       Server ='$server',
       platform ='$platf',
       net_status='$stat' WHERE OrderID='$search2'";

       if (mysqli_query($connect,$sql77))
       {
       $resu = "<div class='alert alert-success' role='alert'>Service have been configured sucessfully.</div>";
       echo $resu;
       }
       else{
       $resu = "<div class='alert alert-danger' role='alert'>".mysqli_error($connect)."</div>";

       }
       }
       ?>
     </div>
            </div>
        </div>
      </div>

      <div class="container-fluid">

          <div class="row cm-fix-height">
          </div>
          <div class="panel panel-default">

              <div class="panel-body">

                <div align="center">
                  <h3><strong>Network Notes</strong></h3>
                  <br />
                  <div align="center">
                    <?php

                    if ($search == "")
                    {

                    }
                    else
                    {
                      echo "<form method='post' action='main.php?page=comment' target='_blank'>";
                      echo "<input type='hidden' id='disabledTextInput' class='form-control' name='txtordno1' value='$search' readonly>";
                      echo "<button type='submit' class='btn btn-primary btn-lg' name='btn_comment'>Add New Comment</button></div>";
                      echo "</form>";
                    }

                     ?>
                  <br />
                  <div class="responsive-table">
  <table class="table table-striped table-bordered" width="100%" cellspacing="0">
    <?php
       if($search == "")
       {

       }
       else {

         echo"<thead>";
         echo "<tr>";
         echo "<th>Date and Time</th>";
         echo "<th>Username</th>";
         echo "<th>Comments</th>";
         echo "</tr>";
         echo"<thead>";
         echo "<tbody>";
         $tbsql="SELECT * FROM tbl_ordernotes where Nref=$search and cmmnt_type ='Network'";

         $records =mysqli_query($connect,$tbsql);
         while($package=mysqli_fetch_assoc($records))
             {

           echo "<tr>";
           echo "<td>".$package["date"]."</td>";
           echo "<td>".$package["Username"]."</td>";
           echo "<td>".$package["comments"]."</td>";
           echo "</tr>";


             } // end While loop
       }

        echo "</tbody>";


        ?>

  </tbody>
  </table>
  </div>

  </div>
      </div>
    </div>
  </div>
