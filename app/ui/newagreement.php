<?php include ("app/appdata/connection.php"); ?>
<?php include ('app/appdata/hunter.php')?>
<?php
// Turn off all error WWWreporting
error_reporting(0);
?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">New Agreement</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">

              <form action="" method="post" id="orderform" data-parsley-validate="">
<div class="col-xs-12">
<div align="center">
<div class="form-group">
<label for="disabledTextInput">Search By Order Reference</label>
<div class="form-inline">
<input type="text" id="order_nic" class="form-control" placeholder="Reference without N Prefix" name="txtnicno" value ="<?php if(isset($_POST['txtnicno'])){ echo($_POST['txtnicno']); } ?>">
<button type="submit" class="btn btn-primary" name="btn_lookup"><a class="fa fa fa-search" style="color:white;">&nbsp;</a>Lookup</button>
</div>
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
       $msg="<h6 style=color:red;>Looks like the user details are not available in the database. Create the customer profile first and try again.!</h6>";
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

<br />
<h4><strong>Customer Information</strong></h4>
<hr />
<div class="col-xs-6">
<div class="form-group">
<label for="disabledTextInput">Name of Customer</label>
<input type="text" id="order_contact" class="form-control" placeholder="John Smith" name="txtauthcontact" value="<?php echo $fname." ".$lname;?>" readonly>
</div>
<div class="form-group">
<label for="disabledTextInput">Permanent Address</label>
<input type="text" id="order_address1" class="form-control" placeholder="Street Number" name="txtadd1" value="<?php echo $add1; ?>" readonly>
</div>
<div class="form-group">
<input type="text" id="order_address2" class="form-control" placeholder="Street Name" name="txtadd2" value="<?php echo $add2; ?>" readonly>
</div>
<div class="form-group">
<input type="text" id="order_address3" class="form-control" placeholder="Suburb" name="txtadd3" value="<?php echo $add3; ?>" readonly>
</div>
<div class="form-group">
<input type="text" id="order_address4" class="form-control" placeholder="Postal Code" name="txtadd4" value="<?php echo $add4; ?>" readonly>
</div>
<div class="form-group">
<label for="disabledTextInput">Country</label>
<input type="text" id="order_country" class="form-control" placeholder="Sri Lanka" name="txtcountry" value="<?php echo $country; ?>" readonly>
</div>
</div>

<div class="col-xs-6">
<div class="form-group">
<label for="disabledTextInput">Email Address</label>
<input type="text" id="disabledTextInput" class="form-control" placeholder="email@domain.com" name="txtemail" value="<?php echo $email; ?>" readonly>
</div>
<div class="form-group">
<label for="disabledTextInput">Contact Number</label>
<input type="text" id="order_contactnum" class="form-control" placeholder="Contact Number with country code for oversease clients" name="txtcontactno" value="<?php echo $contact; ?>" readonly>
</div>
<div class="form-group">
<label for="disabledTextInput">Company Name</label>
<input type="text" id="order_company" class="form-control" placeholder="Sunshine Holdings" name="txtcompname" readonly>
</div>
<div class="form-group">
<label for="disabledTextInput">Business Registration No</label>
<input type="text" id="order_br" class="form-control" placeholder="WA/02/49950" name="txtbusregno" readonly>
</div>
</div>

</div> <!-- End of Section -->

<div class="col-xs-12">
<br />
<h4><strong>Order Information</strong></h4>
<hr />
<div class="col-xs-6">
<div class="form-group">
<label for="disabledTextInput">Order Type</label>
<input type="text" id="order_contact" class="form-control" placeholder="" name="txtauthcontact" value="<?php echo $fname." ".$lname;?>" readonly>
</div>
<div class="form-group">
<label for="disabledTextInput">Plan Name</label>
<input type="text" id="order_country" class="form-control" placeholder="" name="txtcountry" value="<?php echo $country; ?>" readonly>
</div>
</div>

<div class="col-xs-6">
<div class="form-group">
<label for="disabledTextInput">Contract Term</label>
<input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtemail" value="<?php echo $email; ?>" readonly>
</div>
<div class="form-group">
<label for="disabledTextInput">Order Reference</label>
<input type="text" id="order_contactnum" class="form-control" placeholder="" name="txtcontactno" value="<?php echo $contact; ?>" readonly>
</div>
</div>

</div> <!-- end of Section -->
        </div>
    </div>
</div>
