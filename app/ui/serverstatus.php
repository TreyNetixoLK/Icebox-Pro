<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Create New Server</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
              <?php include ("app/appdata/general.php"); ?>

     <br /><br />
     <div class="row">
     <form class="form-horizontal" action="" method="post">
     <div class="col-sm-6">

     <div class="form-group">
     <label for="inputEmail3" class="col-sm-4 control-label">Server Name</label>
     <div class="col-sm-6">
     <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtservern">
     </div>
     </div>
     <div class="form-group">
     <label for="inputEmail3" class="col-sm-4 control-label">Service Provider</label>
     <div class="col-sm-6">
     <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtprovider">
     </div>
     </div>
     <div class="form-group">
     <label for="inputEmail3" class="col-sm-4 control-label">Allocated Capacity</label>
     <div class="col-sm-6">
     <input type="text" class="form-control" id="inputEmail3" placeholder="Values in MB" name="txtallocap">
     </div>
     </div>
     <div class="form-group">
     <label for="inputEmail3" class="col-sm-4 control-label">Allocated Bandwith</label>
     <div class="col-sm-6">
     <input type="text" class="form-control" id="inputEmail3" placeholder="Values in MB" name="txtband">
     </div>
     </div>
     </div>

     <div class="col-sm-6">

     <div class="form-group">
     <label for="inputEmail3" class="col-sm-4 control-label">DNS Server [Primary]</label>
     <div class="col-sm-6">
     <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtdns1">
     </div>
     </div>
     <div class="form-group">
     <label for="inputEmail3" class="col-sm-4 control-label">DNS Server [Redundant]</label>
     <div class="col-sm-6">
     <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtdns2">
     </div>
     </div>
     <div class="form-group">
     <label for="inputEmail3" class="col-sm-4 control-label">Platform</label>
     <div class="col-sm-6">
       <select class="form-control" name="txtplat">
       <option></option>
       <option>Plesk</option>
       <option>Cpanel</option>
       <option>IIS</option>
       <option>Apache</option>
       <option>Tomcat</option>
       </select>
     </div>
     </div>
     <div class="form-group">
     <label for="inputEmail3" class="col-sm-4 control-label">Service Status</label>
     <div class="col-sm-6">
     <select class="form-control" name="txtstat">
     <option></option>
     <option>Active</option>
     <option>Inactive</option>
     </select>
     </div>
     </div>
     </div>

     <br />
     <div align="center">
     <button type="submit" class="btn btn-success" name="Btn_Save">Create Server</button>&nbsp;
     <br />
     <br />
     </div>
         </form>
<div align="center">
     <?php

     $name= $_POST['txtservern'];
     $provider=$_POST['txtprovider'];
     $capacity =$_POST['txtallocap'];
     $bandwith =$_POST['txtband'];
     $status =$_POST['txtstat'];
     $dns1 =$_POST['txtdns1'];
     $dns2 =$_POST['txtdns2'];
     $plat = $_POST['txtplat'];

     $resu = "";
     $resu1="";

     if(isset ($_POST['Btn_Save']))
     {
       $sql32 = "INSERT INTO tbl_server (serv_name,serv_provider,alloc_cap,used_cap,alloc_band,used_band,platform,DDNS1,DDNS2,svr_status) VALUES
       ('$name','$provider','$capacity','0','$bandwith','0','$plat','$dns1','$dns2','$status')";
       if(mysqli_query($connect,$sql32))
       {
         $resu = "<div class='alert alert-success' align='center' role='alert' style='width:800px;'> &nbsp;Server has been created successfully.</div>";
           echo $resu;
       }
       else{
         $resu ="<div class='alert alert-danger' align='center' role='alert' style='width:800px;'> &nbsp;Unable to create server. Please check the details and try again.</div>";
         echo $resu;
         }
     }
     ?></div>


            </div>
        </div>
    </div>
