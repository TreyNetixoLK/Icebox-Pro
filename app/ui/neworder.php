<?php include ("app/appdata/connection.php"); ?>
<?php include ('app/appdata/hunter.php')?>
<?php
// Turn off all error WWWreporting
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

              <form action="" method="post" id="orderform">
<div class="col-xs-6">
<div class="form-group">
<label for="disabledTextInput">NIC No</label>
<div class="form-inline">
<input type="text" id="order_nic" class="form-control" placeholder="XXXXXXXXXV" name="txtnicno" value ="<?php if(isset($_POST['txtnicno'])){ echo($_POST['txtnicno']); } ?>">
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
<div class="form-group">
<label for="disabledTextInput">Name of Authorised Contact</label>
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
<label for="disabledTextInput">Email Address</label>
<input type="text" id="disabledTextInput" class="form-control" placeholder="email@domain.com" name="txtemail" value="<?php echo $email; ?>" readonly>
</div>
<div class="form-group">
<label for="disabledTextInput">Contact Number</label>
<input type="text" id="order_contactnum" class="form-control" placeholder="Contact Number with country code for oversease clients" name="txtcontactno" value="<?php echo $contact; ?>" readonly>
</div>
<div class="form-group">
<label for="disabledTextInput">Country</label>
<input type="text" id="order_country" class="form-control" placeholder="Sri Lanka" name="txtcountry" value="<?php echo $country; ?>">
</div>
</div>
<div class="col-xs-6">
  <div class="form-group">
  <label for="disabledTextInput"></label>
  <br /><br /><br />
  </div>
  <div class="form-group">
  <label for="disabledSelect">Order Type</label>
  <select id="order_type" class="form-control" name="txtordtype">
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
  <label for="disabledTextInput">Company Name</label>
  <input type="text" id="order_company" class="form-control" placeholder="Sunshine Holdings" name="txtcompname">
  </div>
  <div class="form-group">
  <label for="disabledTextInput">Business Registration No</label>
  <input type="text" id="order_br" class="form-control" placeholder="WA/02/49950" name="txtbusregno">
  </div>
<div class="form-group">
<label for="disabledTextInput">Domain Name</label>
<input type="text" id="order_domain" class="form-control" placeholder="example.com" name="txtdomainname">
</div>
<div class="form-group">
<label for="disabledSelect">Plan Name</label>
<select class="form-control" name="txtplan" id="order_plan">
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
<select id="order_contract" class="form-control" name="txtcontractterm">
<option></option>
<option>12 Months</option>
<option>24 Months</option>
<option>36 Months</option>
</select>
</div>

<div class="form-group">
<label for="disabledTextInput">Account Manager</label>
<input type="text" id="order_am" class="form-control" placeholder="" name="txtaccountmanager" value="<?php echo $fullname; ?>" readonly>
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<label for="disabledTextInput">Requirement</label>
<textarea class="form-control" rows="3" name="txtcomments" data-length="800" placeholder="Please describe the customers requirement"></textarea>
</div>
<div align="center">
<button type="submit" id="order_btn" class="btn btn-success" name="btn_CreateSale">Create Order</button>
</div>
</form>
<br />
<?php
$ordert=$_POST['txtordtype'];
$nic= $_POST['txtnicno'];
$custname= $_POST['txtcompname'];
$bregno= $_POST['txtbusregno'];
$aucontact= $_POST['txtauthcontact'];
$conactno =$_POST['txtcontactno'];
$email=$_POST['txtemail'];
$add1=$_POST['txtadd1'];
$add2=$_POST['txtadd2'];
$add3=$_POST['txtadd3'];
$add4=$_POST['txtadd4'];
$domain=$_POST['txtdomainname'];
$planname=$_POST['txtplan'];
$comments=$_POST['txtcomments'];
$contract = $_POST['txtcontractterm'];
$createdate = date('Y-m-d');
$country= $_POST['txtcountry'];
$val = $_POST ['txtaccountmanager'];
$Status ="Pending";
$resu = "";
$resu1="";

if(isset ($_POST['btn_CreateSale']))
{
	$sql = "insert into tbl_orders(CustName,NIC_NO,BusinessReg,OrdType,SiteContact,address1,address2,address3,address4,contract_term,ContactNo,Email,DomainName,HostingPlan,Comments,Status,createdby,Ord_Rec_Date,country) values ('$custname','$nic','$bregno','$ordert','$aucontact','$add1','$add2','$add3','$add4','$contract','$conactno','$email','$domain','$planname','$comments','$Status','$val','$createdate','$country')";

if (mysqli_query($connect,$sql))
	{
		$resu = "<div class='alert alert-success' role='alert'>The Order has been created.</div>";
		echo $resu;
	}
	else{
		$resu = "<div class='alert alert-danger' role='alert'>".mysqli_error($connect)."</div>";
		echo $resu;
		}
}
?>
</div>
            </div>
        </div>
    </div>
    <script>

    function ValidateText (id)
    {
      if($("#"+id).val()==null || $("#"+id).val()=="" )
      {
        var div = $("#"+id).closest("div");
        div.addclass("has-error");
        return false;
      }
      else
      {
        var div = $("#"+id).closest("div");
        div.removeclass("has-error");
        return true;
      }
    }
    $(document).ready(

      function()
      {
        $("#order_btn").click(function()
          {
              if(!ValidateText("order_br"))
              {
                return false;
              }
              if(!ValidateText("order_company"))
              {
                return false;
              }
              if(!ValidateText("order_country"))
              {
                return false;
              }
              if(!ValidateText("order_domain"))
              {
                return false;
              }

              $("form#orderform").submit();
          }
          );
      }
    );
    </script>
