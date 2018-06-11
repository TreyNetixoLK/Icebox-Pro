<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);

$ordernumber = $_POST[txtordno1];
?>

<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Add Comments</h2>
    </div>
        <div class="container-fluid">

            <div class="row cm-fix-height">
            </div>
            <div class="panel panel-default">

                <div class="panel-body">

                  <div align="center">
                    <h3><strong>Add New Notes</strong></h3>
                    <br />
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <form method="post" action="">
                      <div class="form-group">
                         <input type="hidden" id="disabledTextInput" class="form-control" width="50" name="txtordernum" value="<?php echo $ordernumber; ?>" readonly>
                       </div>
                       <div class="form-group">
                       <label for="disabledSelect">Comment Type</label>
                       <select id="order_type" class="form-control" name="txtordtype">
                       <option>Public</option>
                       <option>Private</option>
                       <option>Network</option>
                       </select>
                       </div>
                       <div class="form-group">
                          <label for="disabledTextInput">Comment</label>
                          <textarea class="form-control" rows="6" name="txtcomments" data-length="800" placeholder=""></textarea>
                        </div>
                    <button type="submit" class="btn btn-primary btn-lg" name="btn_save">Save Comment</button>
                  </form>
                  <br />
                  <?php
                  $order = $_POST['txtordernum'];
                  $type = $_POST['txtordtype'];
                  $cmnt = $_POST['txtcomments'];
                  $val = $_SESSION ['user'];

                  $resu = "";
                  $resu1="";

                  if(isset ($_POST['btn_save']))
                  {
                    $sql3211 = "INSERT INTO tbl_ordernotes (Nref,Username,comments,cmmnt_type) VALUES ('$order','$val','$cmnt','$type')";
                    if(mysqli_query($connect,$sql3211))
                    {
                      $resu = "<div class='alert alert-success' align='center' role='alert'> &nbsp;Your comment has been added</div>";
                        echo $resu;
                        echo "<script>window.close();</script>";
                    }
                    else{
                      $resu ="<div class='alert alert-danger' align='center' role='alert'> &nbsp;Unable add comment. Please check the details and try again.</div>";
                      echo $resu;
                      }
                  }


                  ?>
                    </div>
                    <div class="col-md-4"></div>
                    <br />
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
                <h3><strong>Project History</strong></h3>
                <br />
                <div class="responsive-table">
<table class="table table-striped table-bordered" width="100%" cellspacing="0">
  <?php
     if($ordernumber == "")
     {

     }
     else {

       echo"<thead>";
       echo "<tr>";
       echo "<th>Date and Time</th>";
       echo "<th>Type</th>";
       echo "<th>Order Reference</th>";
       echo "<th>Username</th>";
       echo "<th>Comments</th>";
       echo "</tr>";
       echo"<thead>";
       echo "<tbody>";
       $tbsql="SELECT * FROM tbl_ordernotes where Nref=$ordernumber and cmmnt_type!='Network'";

       $records =mysqli_query($connect,$tbsql);
       while($package=mysqli_fetch_assoc($records))
           {

         echo "<tr>";
         echo "<td>".$package["date"]."</td>";
         echo "<td>".$package["cmmnt_type"]."</td>";
         echo "<td>".$package["Nref"]."</td>";
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
