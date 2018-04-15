<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Create Customer Profile</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
              <form action="" method="post" data-parsley-validate="">
  <div class="col-xs-6">
  <div class="form-group">
  <label for="disabledTextInput">First Name</label>
  <input type="text" id="disabledTextInput" class="form-control" placeholder="John" name="txtfname" required="">
  </div>
  <div class="form-group">
  <label for="disabledTextInput">Email Address</label>
  <input type="email" id="disabledTextInput" class="form-control" placeholder="emal@domain.com" name="txtemail" data-parsley-trigger="change" required="">
  </div>
  <div class="form-group">
  <label for="disabledTextInput">NIC No</label>
  <input type="text" id="disabledTextInput" class="form-control" placeholder="XXXXXXXXXV" name="txtnicno" required="">
  </div>
  <div class="form-group">
  <label for="disabledTextInput">Contact Number</label>
  <input type="text" id="disabledTextInput" class="form-control" placeholder="+947X XXXXXXXX" name="txtcontact" required="">
  </div>
  </div>
  <div class="col-xs-6">
  <div class="form-group">
  <label for="disabledTextInput">Last Name</label>
  <input type="text" id="disabledTextInput" class="form-control" placeholder="Smith" name="txtlname" required="">
  </div>
  <div class="form-group">
  <label for="disabledTextInput">Permanent Address</label>
  <input type="text" id="disabledTextInput" class="form-control" placeholder="Street Number" name="txtadd1" data-parsley-required="">
  <div class="form-group">
  <label for="disabledTextInput"></label>
  <input type="text" id="disabledTextInput" class="form-control" placeholder="Street Name" name="txtadd2" required="">
  </div>
  <div class="form-group">
  <input type="text" id="disabledTextInput" class="form-control" placeholder="Suburb" name="txtadd3" required="">
  </div>
  <div class="form-group">
  <input type="text" id="disabledTextInput" class="form-control" placeholder="Postal Code" name="txtadd4" required="">
  </div>
  </div>

  </div>
                   <hr/>
  <div align="center">
  <button type="submit" class="btn btn-success" name="Btn_createcust">Create Contact</button>
  <button type="reset" class="btn btn-primary">Reset Fields</button>
  </div>
  </form>
  <br />
<div align="center">
  <?php

  $fname= $_POST['txtfname'];
  $lname=$_POST['txtlname'];
  $add1 =$_POST['txtadd1'];
  $add2 =$_POST['txtadd2'];
  $add3 =$_POST['txtadd3'];
  $add4 =$_POST['txtadd4'];
  $email =$_POST['txtemail'];
  $nic = $_POST['txtnicno'];
  $contact =$_POST['txtcontact'];
  $val = $_SESSION ['user'];

  $resu = "";
  $resu1="";

  if(isset ($_POST['Btn_createcust']))
  {
    $sql32 = "INSERT INTO tbl_customers (first_name,last_name,email_address,address1,address2,address3,address4,nic_number,contact_number,created_by) VALUES ('$fname','$lname','$email','$add1','$add2','$add3',$add4,'$nic','$contact','$val')";
    if(mysqli_query($connect,$sql32))
    {
      $resu = "<div class='alert alert-success' align='center' role='alert' style='width:800px;'> &nbsp;Customer Information Inserted</div>";
        echo $resu;
    }
    else{
      $resu ="<div class='alert alert-danger' align='center' role='alert' style='width:800px;'> &nbsp;Unable to create user. Please check the details and try again.</div>";
      echo $resu;
      }
  }
  ?>
</div>
            </div>

        </div>
    </div>
