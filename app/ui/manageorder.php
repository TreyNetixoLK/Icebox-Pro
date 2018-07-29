<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>

<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Manage Order</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
              <?php include ("app/appdata/general.php"); ?>
              <!-- IT Starts from Here -->
              <div align="center">
              <form class="form-inline" method="post">
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Reference without the prefix 'N'" style="width: 300px;" name="txtsearch" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>"> &nbsp;<button type="submit" class="btn btn-primary" name="btn_Search">Search</button>
               </form>
              </div>
              <?php


               if(isset($_POST['btn_Search']))
               {
                  $search =$_POST['txtsearch'];
                  $sql9="SELECT * FROM tbl_orders WHERE OrderID='$search'";

                  if($result=mysqli_query($connect,$sql9))
                  {

                    if(mysqli_num_rows($result)>0)
                    {
                     while($row=mysqli_fetch_array($result))
                     {
                                               $ordid =$row[0];
                                               $compname=$row[1];
                                               $lname =$row[2];
                                               $reg =$row[3];
                                               $type =$row[4];
                                               $Sitecontact =$row[5];
                                               $add3 =$row[6];
                                               $add4 =$row[7];
                                               $nic =$row[8];
                                               $contact =$row[9];
                                               $gitrepo =$row[15];
                                               $comments =$row[24];
                                               $status =$row[30];
                                               $appraisal = $row[32];
                                               $uidesign = $row[33];
                                               $dbdesign = $row[34];
                                               $develop = $row[35];
                                               $testing =$row[36];
                                               $completion =$row [37];
                                               $eta = $row [40];
                                               $engineer = $row [23];
                                               $accountman = $row [38];
                                               $scemail = $row[12];
                                               $sccontact = $row[13];
                     }
                    }
                   else
                    {
                     $msg="<div align='center'><h5 style=color:red;>Invalid Order Reference. Please enter a valid order reference and try again.</h5></div>";
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
               <form method="post" action="">
              <div class="col-xs-6">
              <div class="form-group">
                <label for="disabledTextInput">Order Reference</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtordNo" value="<?php echo $ordid; ?>" readonly>
              </div>
              <div class="form-group">
                <label for="disabledTextInput">Order Type</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtordtype" value="<?php echo $type; ?>" readonly>
              </div>

              <div class="form-group">
                 <label for="disabledTextInput">Customer Requirement</label>
                 <textarea class="form-control" rows="4" name="txtrequirement" data-length="800" placeholder=""><?php echo $comments; ?></textarea>
               </div>

               <div class="form-group">
                 <label for="disabledTextInput">Account Manager</label>
                 <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $accountman; ?>" readonly>
               </div>

              </div>

            <div class="col-xs-6">
            <div class="form-group">
              <label for="disabledTextInput">Customer / Company Name</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtcompname" value="<?php echo $compname; ?>" readonly>
            </div>

            <div class="form-group">
              <label for="disabledSelect">Business Registration Number</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtbreg" required="" value="<?php echo $reg;?>">
            </div>

            <div class="form-group">
              <label for="disabledSelect">Authorised Contact Person</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtcontactperson" required="" value="<?php echo $Sitecontact;?>">
            </div>

            <div class="form-group">
              <label for="disabledSelect">Authorised Contact Email</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtemail" required="" value="<?php echo $sccontact;?>">
            </div>

            <div class="form-group">
              <label for="disabledSelect">Authorised Contact Number</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtnumber" required="" value="<?php echo $scemail;?>">
            </div>


          </div>
          <br />
          <div align="center">
          <button type="submit" class="btn btn-warning" name="btn_Update">Update Changes</button>&nbsp;&nbsp;
          </div>
        </form>
        <br />
<!-- IT ENDS HERE -->
<?php


if(isset ($_POST['btn_Update']))
{

$search2 =$_POST['txtordNo'];
$requirement =$_POST['txtrequirement'];
$Breg=$_POST['txtbreg'];
$Contactname = $_POST['txtcontactperson'];
$Cemail = $_POST['txtemail'];
$Cnumber = $_POST['txtnumber'];


$resu = "";

	$sql77 = "update tbl_orders set Comments ='$requirement',
	 BusinessReg='$Breg',
   SiteContact='$Contactname',
   Email='$Cemail',
   ContactNo='$Cnumber' WHERE OrderID='$search2'";

    if (mysqli_query($connect,$sql77))
	{
		$resu = "<div class='alert alert-success' role='alert'>Records have been updated successfully.</div>";
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

  <div class="container-fluid">

      <div class="row cm-fix-height">
      </div>
      <div class="panel panel-default">

          <div class="panel-body">

            <div align="center">
              <h3><strong>Quotations</strong></h3>
              <br />
              <div align="center">
                <?php

                if ($ordid == "")
                {

                }
                else
                {
                  echo "<form method='post' action='main.php?page=quotes' target='_blank'>";
                  echo "<input type='hidden' id='disabledTextInput' class='form-control' name='txtordno1' value='$ordid' readonly>";
                  echo "<button type='submit' class='btn btn-primary btn-lg' name='btn_comment'>Add New Quote</button></div>";
                  echo "</form>";
                }

                 ?>
              <br />
              <div class="responsive-table">
  <table class="table table-striped table-bordered" width="100%" cellspacing="0">
  <?php
   if($ordid == "")
   {

   }
   else {

     echo"<thead>";
     echo "<tr>";
     echo "<th>Date Created</th>";
     echo "<th>Created By</th>";
     echo "<th>Date Approved</th>";
     echo "<th>Approved By</th>";
     echo "<th>Quote Value</th>";
     echo "<th>Quote Document</th>";
     echo "</tr>";
     echo"<thead>";
     echo "<tbody>";
     $tbsql78="SELECT * FROM tbl_quotes where order_ref=$ordid";

     $records =mysqli_query($connect,$tbsql78);
     while($package=mysqli_fetch_assoc($records))
         {

       echo "<tr>";
       echo "<td>".$package["issued_date"]."</td>";
       echo "<td>".$package["created_by"]."</td>";
       echo "<td>".$package["date_approved"]."</td>";
       echo "<td>".$package["approved_by"]."</td>";
       echo "<td>".$package["quote_value"]."</td>";
       echo "<td>"?><a href="<?php echo $package["quote_document"]; ?>" target="_blank"><img src="assets/img/sf/file-pdf.svg" alt="folder">&nbsp;View Quote</a><?php echo "</td>";
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


  <div class="container-fluid">

      <div class="row cm-fix-height">
      </div>
      <div class="panel panel-default">

          <div class="panel-body">

            <div align="center">
              <h3><strong>Order History</strong></h3>
              <br />
              <div align="center">
                <?php

                if ($ordid == "")
                {

                }
                else
                {
                  echo "<form method='post' action='main.php?page=comment' target='_blank'>";
                  echo "<input type='hidden' id='disabledTextInput' class='form-control' name='txtordno1' value='$ordid' readonly>";
                  echo "<button type='submit' class='btn btn-primary btn-lg' name='btn_comment'>Add New Comment</button></div>";
                  echo "</form>";
                }

                 ?>
              <br />
              <div class="responsive-table">
<table class="table table-striped table-bordered" width="100%" cellspacing="0">
<?php
   if($ordid == "")
   {

   }
   else {

     echo"<thead>";
     echo "<tr>";
     echo "<th>Date and Time</th>";
     echo "<th>Type</th>";
     echo "<th>Username</th>";
     echo "<th>Comments</th>";
     echo "</tr>";
     echo"<thead>";
     echo "<tbody>";
     $tbsql="SELECT * FROM tbl_ordernotes where Nref=$ordid and cmmnt_type!='Network'";

     $records =mysqli_query($connect,$tbsql);
     while($package=mysqli_fetch_assoc($records))
         {

       echo "<tr>";
       echo "<td>".$package["date"]."</td>";
       echo "<td>".$package["cmmnt_type"]."</td>";
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
