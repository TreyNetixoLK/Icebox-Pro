<?php include ("app/appdata/connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
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
              <!-- IT Starts from Here -->
              <div align="center">
              <form class="form-inline" method="post">
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Reference without the prefix 'N'" style="width: 300px;" name="txtsearch" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>"> &nbsp;
              <button type="submit" class="btn btn-primary" name="btn_Search">Search</button>
               </form>
              </div>
              <?php


	if(isset($_POST['btn_Search']))
	{
	   $search =$_POST['txtsearch'];
	   $sql="SELECT * FROM tbl_orders WHERE OrderID=".$search;
	   $V = "N";

	   if($result=mysqli_query($connect,$sql))
	   {

		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {

			     $id=$row[0] ;
				 $name=$row[1];
				 $nic =$row[2];
				 $breg =$row[3];
				 $ordtype =$row[4];
				 $Scontact =$row[5];
				  $padd =$row[6];
				  $contact =$row[7];
				  $email =$row[8];
				  $domain =$row[14];
				  $hosting =$row[10];
				  $bandwith =$row[11];
				  $cpun =$row[12];
				  $cppw =$row[13];
				  $eacc =$row[15];
				  $PE =$row[16];
				  $cmnt =$row[17];
				  $purl =$row[18];
				  $dns1 =$row[19];
				  $dns2 =$row[20];
				  $mipa =$row[21];
				  $svr =$row[22];
				  $stat =$row[23];
				  $creat =$row[24];
				  $ETA =$row[26];
                  $Rec_d =$row[27];
                  $Act_d =$row[28];

			  }
		   }
		  else
		   {
			  $msg="<h3 style=color:red;>Not Found!</h3>";
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
              <form action="app/appdata/dompdf_ops.php" method="post">
              <div class="col-xs-6">
              <div class="form-group">
                <label for="disabledTextInput">Order Reference</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Sunshine Holdings" name="ord_ref" value="<?php echo $id; ?>" readonly>
              </div>
            </div>
            <div class="col-xs-6">
            <div class="form-group">
              <label for="disabledTextInput">Customer / Company Name</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Sunshine Holdings" name="com_name" value="<?php echo $name; ?>" readonly>
            </div>
          </div>
          <div class="col-xs-12">
          <div class="form-group">
            <label for="disabledTextInput">Requirement</label>
            <textarea class="form-control" rows="3" name="txtcomments" data-length="800" placeholder="Please describe the customers requirement" name="description"></textarea>
              </div></div>
              <div class="col-xs-12">
              <div class="form-group">
                <label for="disabledTextInput">Price</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="3200.00" name="price">
                  </div>
                  <input type="text" class="form-control" name="domain" value="<?php echo $domain; ?>" id="exampleFormControlInput1">
                  <input type="text" class="form-control" name="type" value="<?php echo $ordtype; ?>" id="exampleFormControlInput1">
                  <br />
                  <div align="center">
                  <button type="submit" class="btn btn-success" name="btn_generate">Generate Quote</button>
                  <button type="reset" class="btn btn-primary">Reset All Fields</button>
                  </div>
                </form>
                </div>
<!-- IT ENDS HERE -->
            </div>
        </div>
    </div>
