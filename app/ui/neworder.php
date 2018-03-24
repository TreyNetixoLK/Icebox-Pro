<?php include ("app/appdata/connection.php"); ?>
<?php include('app/appdata/hunter.php')?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Create New Order</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">

              <form action="" method="post">
<div class="col-xs-6">
<div class="form-group">
<label for="disabledTextInput">NIC No</label>
<div class="form-inline">
<input type="text" id="disabledTextInput" class="form-control" placeholder="XXXXXXXXXV" name="txtnicno" value ="<?php if(isset($_POST['txtnicno'])){ echo($_POST['txtnicno']); } ?>">
<button type="submit" class="btn btn-primary" name="btn_lookup"><a class="fa fa fa-search" style="color:white;"></a></button>
</div>
</div>
<?php

 if(isset($_POST['btn_lookup']))
 {
    $search =$_POST['txtnicno'];
    $sql9="SELECT * FROM tbl_customers WHERE nic_number='$search'";

    if($result=mysqli_query($connect,$sql9))
    {

      if(mysqli_num_rows($result)>0)
      {
       while($row=mysqli_fetch_array($result))
       {
                                 $fname=$row[1];
                                 $lname =$row[2];
                                 $email =$row[3];
                                 $add1 =$row[4];
                                 $add2 =$row[5];
                                 $add3 =$row[6];
                                 $add4 =$row[7];
                                 $nic =$row[8];
                                 $contact =$row[9];

       }
      }
     else
      {
       $msg="<h3 style=color:red;>Not Found!</h3>";
       echo $msg;
      }

    }
    else
    {
     $msg ="<h3 style=color:red;>".mysqli_error($connect) ."</h3>";
     echo $msg;
    }
 }

?>
<div class="form-group">
<label for="disabledTextInput">Name of Authorised Contact</label>
<input type="text" id="disabledTextInput" class="form-control" placeholder="John Smith" name="txtauthcontact" value="<?php echo $fname."&nbsp;".$lname;?>">
</div>
<div class="form-group">
<label for="disabledTextInput">Permanent Address</label>
<input type="text" id="disabledTextInput" class="form-control" placeholder="Street Number" name="txtadd1" value="<?php echo $add1; ?>">
</div>
<div class="form-group">
<input type="text" id="disabledTextInput" class="form-control" placeholder="Street Name" name="txtadd2" value="<?php echo $add2; ?>">
</div>
<div class="form-group">
<input type="text" id="disabledTextInput" class="form-control" placeholder="Suburb" name="txtadd3" value="<?php echo $add3; ?>">
</div>
<div class="form-group">
<input type="text" id="disabledTextInput" class="form-control" placeholder="Postal Code" name="txtadd4" value="<?php echo $add4; ?>">
</div>
<div class="form-group">
<label for="disabledTextInput">Email Address</label>
<input type="text" id="disabledTextInput" class="form-control" placeholder="email@domain.com" name="txtemail" value="<?php echo $email; ?>">
</div>
<div class="form-group">
<label for="disabledTextInput">Contact Number</label>
<input type="text" id="disabledTextInput" class="form-control" placeholder="Contact Number with country code for oversease clients" name="txtcontactno" value="<?php echo $contact; ?>">
</div>
</div>
<div class="col-xs-6">
  <div class="form-group">
  <label for="disabledSelect">Order Type</label>
  <select id="disabledSelect" class="form-control" name="txtordtype">
  <option></option>
  <option>Dynamic Web Site</option>
  <option>Static Web Site</option>
  <option>Mobile Application</option>
  <option>Web Application</option>
  <option>Windows Application</option>
  <option>Telco Solution</option>
  <option>Website Maintenance</option>
  </select>
  </div>
  <div class="form-group">
  <label for="disabledTextInput">Customer / Company Name</label>
  <input type="text" id="disabledTextInput" class="form-control" placeholder="Sunshine Holdings" name="txtcompname">
  </div>
  <div class="form-group">
  <label for="disabledTextInput">Business Registration No</label>
  <input type="text" id="disabledTextInput" class="form-control" placeholder="WA/02/49950" name="txtbusregno">
  </div>
<div class="form-group">
<label for="disabledTextInput">Domain Name</label>
<input type="text" id="disabledTextInput" class="form-control" placeholder="example.com" name="txtreqdomainname">
</div>
<div class="form-group">
<label for="disabledSelect">Plan Name</label>
<select class="form-control" name="plan">
<option></option>
<?php

$sql4 =mysqli_query($connect,"select * from tbl_packages");
while($row=mysqli_fetch_array($sql4))
{
?>
<option><?php echo $row["pkg_name"] ?></option>
<?php

}

?>
</select>
</div>
<div class="form-group">
<label for="disabledTextInput">Contract Term</label>
<select id="disabledSelect" class="form-control" name="txtordtype">
<option></option>
<option>12 Months</option>
<option>24 Months</option>
<option>36 Months</option>
</select>
</div>

<div class="form-group">
<label for="disabledTextInput">Account Manager</label>
<input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtreqdomainname" value="<?php echo $fullname; ?>" readonly>
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<label for="disabledTextInput">Requirement</label>
<textarea class="form-control" rows="3" name="txtcomments" data-length="800" placeholder="Please describe the customers requirement"></textarea>
</div>
                   <hr/>
<div align="center">
<button type="submit" class="btn btn-success" name="btn_CreateSale">Create Order</button>
<button type="reset" class="btn btn-primary">Reset All Fields</button>
</div>
</form>
</div>
            </div>
        </div>
    </div>
