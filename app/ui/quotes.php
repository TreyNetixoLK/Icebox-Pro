<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);

$ordernumber = $_POST[txtordno1];
?>

<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Add Quote</h2>
    </div>
        <div class="container-fluid">

            <div class="row cm-fix-height">
            </div>
            <div class="panel panel-default">

                <div class="panel-body">

                  <div align="center">
                    <h3><strong>Add New Quotes</strong></h3>
                    <br />
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <form method="post" action="">
                      <div class="form-group">
                         <input type="text" id="disabledTextInput" class="form-control" width="50" name="txtordernum" value="<?php echo $ordernumber; ?>" readonly>
                       </div>
                       <div class="form-group">
                          <label for="disabledTextInput">Issued Date</label>
                          <input type="date" id="disabledTextInput" class="form-control" width="50" name="txtissueddate" value="">
                        </div>
                        <div class="form-group">
                           <label for="disabledTextInput">Date Approved</label>
                           <input type="date" id="disabledTextInput" class="form-control" width="50" name="txtissueddate" value="">
                         </div>
                         <div class="form-group">
                            <label for="disabledTextInput">Approved By</label>
                            <input type="text" id="disabledTextInput" class="form-control" width="50" name="txtissueddate" value="">
                          </div>
                          <div class="form-group">
                             <label for="disabledTextInput">Quote Value</label>
                             <input type="text" id="disabledTextInput" class="form-control" width="50" name="txtvalue" value="">
                           </div>
                       <div class="form-group">
                          <label for="disabledTextInput">Attach Quote</label>
                          <br /><br />
                          <input type="file" id="exampleInputFile">
                          <p class="help-block">Please only attach one PDF file.</p>
                        </div><br />
                    <button type="submit" class="btn btn-primary btn-lg" name="btn_save">Upload File</button>
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
