<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
 error_reporting(0);
?>

<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Manage Project</h2>
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
                                               $email =$row[3];
                                               $type =$row[4];
                                               $add2 =$row[5];
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
                <label for="disabledTextInput">Git / Bitbucket Repo</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="https://" width="50" name="txtgiturl" value="<?php echo $gitrepo; ?>">
              </div>

              <div class="form-group">
              <label for="disabledTextInput">Status</label>
              <select id="disabledSelect" class="form-control" name="txtstatus" value="">
              <option></option>
              <option <?php if (!empty($status) && $status == 'Pending')  echo 'selected = "selected"'; ?>>Pending</option>
              <option <?php if (!empty($status) && $status == 'Progressing')  echo 'selected = "selected"'; ?>>Progressing</option>
              <option <?php if (!empty($status) && $status == 'On Hold')  echo 'selected = "selected"'; ?>>On Hold</option>
              <option <?php if (!empty($status) && $status == 'Withdrawn')  echo 'selected = "selected"'; ?>>Withdrawn</option>
              <option <?php if (!empty($status) && $status == 'Completed')  echo 'selected = "selected"'; ?>>Completed</option>
              </select>
              </div>

              <div class="form-group">
                 <label for="disabledTextInput">Customer Requirement</label>
                 <textarea class="form-control" rows="4" name="txtcomments" data-length="800" placeholder="" readonly><?php echo $comments; ?></textarea>
               </div>

               <div class="form-group">
                 <label for="disabledTextInput">Project Engineer</label>
                 <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $engineer; ?>" readonly>
               </div>

              </div>

            <div class="col-xs-6">
            <div class="form-group">
              <label for="disabledTextInput">Customer / Company Name</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtcompname" value="<?php echo $compname; ?>" readonly>
            </div>

            <div class="form-group">
              <label for="disabledSelect">Estimated Completion Date (ETA)</label>
            <input type="date" id="disabledTextInput" class="form-control" placeholder="" name="txteta" required="" value="<?php echo $eta;?>">
            </div>

             <div class="panel panel-info">
             <div class="panel-heading">
             <h4 class="panel-title">Project Milestone</h4>
             </div>
             <div class="panel-body">
             <div class="responsive-table">
             <table class="" width="100%" cellspacing="0">
             <tbody>
             <tr>
                 <td>Order Appraisal</td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-todo" name="appraisal" <?php if($appraisal == "progress-todo"){echo "checked";} ?>>
                 <label><small>Pending</small> </label>
               </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio"  value="progress-done progress-current" name="appraisal" <?php if($appraisal == "progress-done progress-current"){echo "checked";} ?>>
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-done" name="appraisal" <?php if($appraisal == "progress-done"){echo "checked";} ?>>
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             <tr>
                 <td>UI Design</td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-todo" name="uidesign" <?php if($uidesign == "progress-todo"){echo "checked";} ?>>
                 <label><small>Pending</small> </label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio"  value="progress-done progress-current" name="uidesign" <?php if($uidesign == "progress-done progress-current"){echo "checked";} ?>>
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-done" name="uidesign" <?php if($uidesign == "progress-done"){echo "checked";} ?>>
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             <tr>
                 <td>Database Design</td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-todo" name="dbdesign" <?php if($dbdesign == "progress-todo"){echo "checked";} ?>>
                 <label><small>Pending</small> </label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio"  value="progress-done progress-current" name="dbdesign" <?php if($dbdesign == "progress-done progress-current"){echo "checked";} ?>>
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-done" name="dbdesign" <?php if($dbdesign == "progress-done"){echo "checked";} ?>>
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             <tr>
                 <td>Development</td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-todo" name="development" <?php if($develop == "progress-todo"){echo "checked";} ?>>
                 <label><small>Pending</small> </label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio"  value="progress-done progress-current" name="development" <?php if($develop == "progress-done progress-current"){echo "checked";} ?>>
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-done" name="development" <?php if($develop == "progress-done"){echo "checked";} ?>>
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             <tr>
                 <td>Testing</td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-todo" name="testing" <?php if($testing == "progress-todo"){echo "checked";} ?>>
                 <label><small>Pending</small> </label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio"  value="progress-done progress-current" name="testing" <?php if($testing == "progress-done progress-current"){echo "checked";} ?>>
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-done" name="testing" <?php if($testing == "progress-done"){echo "checked";} ?>>
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             <tr>
                 <td>Completion</td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-todo" name="completed" <?php if($completion == "progress-todo"){echo "checked";} ?>>
                 <label><small>Pending</small> </label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio"  value="progress-done progress-current" name="completed" <?php if($completion == "progress-done progress-current"){echo "checked";} ?>>
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="radio" value="progress-done" name="completed" <?php if($completion == "progress-done"){echo "checked";} ?>>
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             </tbody>
             </table>
             </div>


             </div>
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
$repo= $_POST['txtgiturl'];
$status= $_POST['txtstatus'];
$appraisal = $_POST['appraisal'];
$ui = $_POST['uidesign'];
$db = $_POST['dbdesign'];
$devop = $_POST['development'];
$testing = $_POST['testing'];
$completed = $_POST['completed'];
$etadate = $_POST['txteta'];

$resu = "";

	$sql77 = "update tbl_orders set gitrepo ='$repo',
	 appraisal='$appraisal',
   ui_design='$ui',
   db_design='$db',
   development='$devop',
   testing='$testing',
   completion='$completed',
   ETA = '$etadate',
	Status='$status' WHERE OrderID='$search2'";

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
                    <h3><strong>Project History</strong></h3>
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
