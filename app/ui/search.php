<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Search Order</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">

              <div class="col-md-12 text-center article-v1-title"></div>
              <br /><br />
              <div class="col-md-12  article-v1-body">
              <div align="center">
              <form class="form-inline" method="post">
              <label for="disabledTextInput">Search Using</label>&nbsp;
              <select id="disabledSelect" class="form-control" name="txttype" value="<?php if(isset($_POST['txttype'])){ echo($_POST['txttype']); } ?>">
                <option></option>
                <option value="OrderID">Netixo Reference</option>
                <option value="NIC_NO">NIC Number</option>
                <option value="CustName">Customer Name</option>

              </select> &nbsp; &nbsp;
              <label for="disabledTextInput">Value</label> &nbsp;
              <input type="text" id="disabledTextInput" class="form-control" placeholder="" style="width: 300px;" name="txtsearch" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>"> &nbsp;
              <button type="submit" class="btn btn-primary" name="btn_Search">Search</button>
               </form>
              </div>
              <br />

              <?php

               if(isset($_POST['btn_Search']))
               {
                  $search =$_POST['txtsearch'];
                  $type = $_POST['txttype'];

                  $sql78="SELECT * FROM tbl_orders WHERE $type='$search'";
                  $records =mysqli_query($connect,$sql78);
                    while($package=mysqli_fetch_assoc($records))
                      {
                  echo      "<table class='table table-bordered table-hover table-striped'>";
                  echo      "      <thead>";
                  echo      "      <tr>";
                  echo      "      <th>Order Reference</th>";
                  echo      "      <th>Customer Name</th>";
                  echo      "      <th>Order Type</th>";
                  echo      "      <th>Plan Name</th>";
                  echo      "      <th>Account Manager</th>";
                  echo      "      <th>Status</th>";
                  echo      "      <th>Action</th>";
                  echo      "      </tr>";
                  echo      "      </thead>";
                  echo      "      <tbody>";
                    echo "<tr>";
                    echo "<td>".$package["OrderID"]."</td>";
                    echo "<td>".$package["CustName"]."</td>";
                    echo "<td>".$package["OrdType"]."</td>";
                    echo "<td>".$package["HostingPlan"]."</td>";
                    echo "<td>".$package["Createdby"]."</td>";
                    echo "<td>".$package["Status"]."</td>";
                    echo "<td align='center'><form method='post' action='main.php?page=orders'>
                    <input type='hidden' id='disabledTextInput' value=".$package['OrderID']." class='form-control' name='txtordernumber' readonly>
                    <button type='submit' class='btn btn-default' name='btn_view'>View Order</button>
                    </form></td>";
                    echo "</tr>";
                    echo      "      </tbody>";
                    echo      "      </table>";
                      } // end While loop


               }
               else {

                 $msg="<h3 align='center' style=color:red;>Not Found!</h3>";
                // echo $msg;

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
