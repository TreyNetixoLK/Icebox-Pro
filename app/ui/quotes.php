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
                      <form method="post" enctype="multipart/form-data">
                      <div class="form-group">
                         <input type="text" id="disabledTextInput" class="form-control" width="50" name="txtordernum" value="<?php echo $ordernumber; ?>" readonly>
                       </div>
                       <div class="form-group">
                          <label for="disabledTextInput">Issued Date</label>
                          <input type="date" id="disabledTextInput" class="form-control" width="50" name="txtissueddate" value="">
                        </div>
                        <div class="form-group">
                           <label for="disabledTextInput">Date Approved</label>
                           <input type="date" id="disabledTextInput" class="form-control" width="50" name="txtapproveddate" value="">
                         </div>
                         <div class="form-group">
                            <label for="disabledTextInput">Approved By</label>
                            <input type="text" id="disabledTextInput" class="form-control" width="50" name="txtapprovedby" value="">
                          </div>
                          <div class="form-group">
                             <label for="disabledTextInput">Quote Value</label>
                             <input type="text" id="disabledTextInput" class="form-control" width="50" name="txtvalue" value="">
                           </div>
                       <div class="form-group">
                          <label for="disabledTextInput">Attach Quote</label>
                          <br /><br />
                          <input type="file" id="uploadquote" name="quotedoc">
                          <p class="help-block" style="color:blue;">Please only attach one PDF file.</p>
                        </div><br />
                    <button type="submit" class="btn btn-primary btn-lg" name="btn_save">Upload and Save</button>
                  </form>
                  <br />
                  <?php

                  if(isset ($_POST['btn_save']))
                  {
                    $target = "quotes/".basename($_FILES['quotedoc']['name']);
                    $file = $_FILES['quotedoc']['name'];
                    $order = $_POST['txtordernum'];
                    $idate = $_POST['txtissueddate'];
                    $adate = $_POST['txtapproveddate'];
                    $appby = $_POST['txtapprovedby'];
                    $price = $_POST['txtvalue'];
                    $val = $_SESSION ['user'];
                    $resu = "";

                    $sql321 = "INSERT INTO tbl_quotes (created_by,order_ref,issued_date,date_approved,approved_by,quote_value,quote_document) VALUES ('$val','$order','$idate','$adate','$appby','$price','quotes/$file')";
                    mysqli_query($connect,$sql321);
                    if(move_uploaded_file($_FILES['quotedoc']['tmp_name'], $target))
                    {
                      $resu = "<div class='alert alert-success' align='center' role='alert'> &nbsp;Quote has been attached to the order.</div>";
                        echo $resu;


                        echo "<script>window.close();</script>";
                    }
                    else{
                      $resu ="<div class='alert alert-danger' align='center' role='alert'> &nbsp;Unable to upload the file due to an error. Please try again.</div>";
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
