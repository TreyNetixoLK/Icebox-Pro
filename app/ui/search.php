<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
//error_reporting(0);
?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Welcome to ICEBOX Pro !</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">

              <div class="col-md-12 text-center article-v1-title"><h1>Search Order Details</h1></div>
              <br /><br /><br /><br /><br /><br />
              <div class="col-md-12  article-v1-body">
              <div align="center">
              <form class="form-inline" method="post">
              <label for="disabledTextInput">Search Using</label>&nbsp;
              <select id="disabledSelect" class="form-control" name="txttype">
                <option></option>
                <?php

                $sql4 =mysqli_query($connect,"SHOW columns FROM tbl_orders");
                while($row=mysqli_fetch_array($sql4))
                {
                ?>
                <option><?php echo $row["Field"] ?></option>
                <?php

                }

                ?>
              </select> &nbsp; &nbsp;
              <label for="disabledTextInput">Value</label> &nbsp;
              <input type="text" id="disabledTextInput" class="form-control" placeholder="" style="width: 300px;" name="txtsearch" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>"> &nbsp;
              <button type="submit" class="btn btn-primary" name="btn_Search">Search</button>
               </form>
              </div>
              <br />
              <table class='table table-bordered table-hover table-striped'>
              <thead>
              <tr>
              <th>Order Reference</th>
              <th>Customer Name</th>
              <th>Order Type</th>
              <th>Plan Name</th>
              <th>Account Manager</th>
              <th>Status</th>
              </tr>
              </thead>
              <tbody>
              <?php

               if(isset($_POST['btn_Search']))
               {
                  $search =$_POST['txtsearch'];
                  $type = $_POST['txttype'];

                  $sql78="SELECT * FROM tbl_orders WHERE '$type'='$search'";
                  $records =mysqli_query($connect,$sql78);
                    while($package=mysqli_fetch_assoc($records))
                      {

                    echo "<tr>";
                    echo "<td>".$package["OrderID"]."</td>";
                    echo "<td>".$package["CustName"]."</td>";
                    echo "<td>".$package["OrdType"]."</td>";
                    echo "<td>".$package["HostingPlan"]."</td>";
                    echo "<td>".$package["Createdby"]."</td>";
                    echo "<td>".$package["Status"]."</td>";
                    echo "</tr>";
                      } // end While loop


               }
               else {

                 $msg="<h3 align='center' style=color:red;>Not Found!</h3>";
                 echo $msg;

               }

              ?>
            </tbody>
            </table>
              <!-- end of Progress Bar -->
              </div>
              <div class="col-md-12 article-v1-footer">


              </div>

            </div>
        </div>
    </div>
