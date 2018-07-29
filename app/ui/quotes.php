<?php include ("app/appdata/connection.php"); ?>
<?php
//Turn off all error reporting
//error_reporting(0);

$ordernumber = $_POST[txtordno1];
?>
                        <style>

.center{
text-align:center;
}
#top{
margin-top:20px;
}
.btn-container{
background:#fff;
border-radius:5px;
padding-bottom:20px;
margin-bottom:20px;
}
.white{
color:white;
}
.imgupload{
color:#F53737;
padding-top:40px;
font-size:7em;
}
#namefile{
color:#C9CCD1;
}
h4>strong{
color:#ff3f3f
}

/*this sets the actual file input to overlay our button*/
#fileup{
opacity: 1;
-moz-opacity: 0;
filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0);
width:200px;
cursor: pointer;
position:absolute;
left: 50%;
transform: translateX(-50%);
bottom: 40px;
height: 30px;
}


                        </style>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0; align:left;">Add Quote</h2>
    </div>
        <div class="container-fluid">

            <div class="row cm-fix-height">
            </div>
            <div class="panel panel-default">

                <div class="panel-body">

                  <div align="center">
                    <h3><strong>Add New Quotes</strong></h3>
                    <br />
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                      <form method="post" action="" enctype="multipart/form-data">
                      <div class="form-group">
                         <input type="text" id="disabledTextInput" class="form-control" width="50" name="txtordernum" value="<?php echo $ordernumber; ?>" readonly>
                       </div>
                       <div class="row">
                        <div class="col-md-4">
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
                        </div>
                        <div class="col-md-8">

                         <div class="form-group">

                   <!-- File Upload -->


        <div class="btn-container">
          <!--the three icons: default, ok file (img), error file (not an img)-->
          <h1 class="imgupload"><i class="fa fa-file-pdf-o"></i></h1>
          <!--this field changes dinamically displaying the filename we are trying to upload-->
          <p id="namefile"><i>Please upload only one .pdf document</i></p>
          <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
          <input type="file" value="" name="quotedoc" id="fileup">
          <br />
        </div>
      <!--additional fields-->
                   <!-- End of File Upload -->

                        </div><br />
                        </div>
                      </div>

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
                    <div class="col-md-1"></div>
                    <br />
    </div>
        </div>
      </div>
    </div>
<script>

</script>
