<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>

<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Edit Customer Details</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
              <div align="center">
              <form class="form-inline" method="post" action="">
              <label for="disabledTextInput">Search By NIC</label> &nbsp;
              <input type="text" id="disabledTextInput" class="form-control" placeholder="XXXXXXXXXV" style="width: 300px;" name="txtsearch" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>"> &nbsp;
              <button type="submit" class="btn btn-primary" name="btn_Search">Search</button>
               </form>

               <?php


               	if(isset($_POST['btn_Search']))
               	{
               	   $search =$_POST['txtsearch'];
               	   $sql9="SELECT * FROM tbl_customers WHERE nic_number='$search'";

               	   if($result=mysqli_query($connect,$sql9))
               	   {

               		   if(mysqli_num_rows($result)>0)
               		   {
               			  while($row=mysqli_fetch_array($result))
               			  {
                                                $cid =$row[0];
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
               			  $msg="<h6 style=color:red;><strong>Unable to find customer details. Plesae recheck the ID number and try again.</strong></h6>";
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
              </div>
              <form action="" method="post">
            <div class="col-xs-6">
            <div class="form-group">
            <label for="disabledTextInput">First Name</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="John" name="txtfname" value="<?php echo $fname; ?>">
            </div>
            <div class="form-group">
            <label for="disabledTextInput">Email Address</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="email@domain.com" name="txtemail" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
            <label for="disabledTextInput">NIC No</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="XXXXXXXXXV" name="txtnicno" value="<?php echo $nic; ?>">
            </div>
            <div class="form-group">
            <label for="disabledTextInput">Contact Number</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="947XXXXXXXX" name="txtcontact" value="<?php echo $contact; ?>">
            </div>
            </div>
            <div class="col-xs-6">
            <div class="form-group">
            <label for="disabledTextInput">Last Name</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Smith" name="txtlname" value="<?php echo $lname; ?>">
            </div>
            <div class="form-group">
            <label for="disabledTextInput">Permanent Address</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Street Number" name="txtadd1" value="<?php echo $add1; ?>">
            <div class="form-group">
            <label for="disabledTextInput"></label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Street Name" name="txtadd2" value="<?php echo $add2; ?>">
            </div>
            <div class="form-group">
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Suburb" name="txtadd3" value="<?php echo $add3; ?>">
            </div>
            <div class="form-group">
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Postal Code" name="txtadd4" value="<?php echo $add4; ?>">
            </div>
            <div class="form-group">
            <input type="hidden" id="disabledTextInput" class="form-control" placeholder="Customer ID" name="txtcid" value="<?php echo $cid; ?>">
            </div>
            </div>

            </div>
                   <hr/>
            <div align="center">
            <button type="submit" class="btn btn-warning" name="Btn_Update">Update Information</button>
            </div>
            </form>
<br />
            <?php


if(isset ($_POST['Btn_Update']))
{

$search2 =$_POST['txtcid'];
$fname= $_POST['txtfname'];
$email= $_POST['txtemail'];
$nic= $_POST['txtnicno'];
$contact= $_POST['txtcontact'];
$lname= $_POST['txtlname'];
$add1 =$_POST['txtadd1'];
$add2=$_POST['txtadd2'];
$add3=$_POST['txtadd3'];
$add4=$_POST['txtadd4'];
$resu = "";

	$sql77 = "update tbl_customers set first_name ='$fname',
	email_address ='$email',
	nic_number ='$nic',
	contact_number ='$contact',
	last_name ='$lname',
	address1 ='$add1',
	address2 ='$add2',
	address3 ='$add3',
	address4 ='$add4' WHERE cust_id='$search2'";

    if (mysqli_query($connect,$sql77))
	{
		$resu = "<div class='alert alert-success' align='center' role='alert'>Details have been modified sucessfully</div>";
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
