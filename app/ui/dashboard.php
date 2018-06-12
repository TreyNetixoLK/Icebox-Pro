<? include ("app/appdata/connection.php"); ?>
<?php

$sql="SELECT COUNT(Status) FROM tbl_orders WHERE Status='Progressing'";

 if($result=mysqli_query($connect,$sql))
	   {

		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {
				  $id=$row[0] ;

			  }
		   }
		  else
		   {

		   }

	   }
	   else
	   {
		  $msg ="<h3 style=color:#FFFF;>".mysqli_error($connect) ."</h3>";
		  echo $msg;
	   }

?>
<?php

$sql2="SELECT COUNT(Status) FROM tbl_orders WHERE net_status='Active'";

 if($result=mysqli_query($connect,$sql2))
	   {

		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {
				  $active=$row[0] ;

			  }
		   }
		  else
		   {

		   }

	   }
	   else
	   {
		  $msg ="<h3 style=color:#FFFF;>".mysqli_error($connect) ."</h3>";
		  echo $msg;
	   }

?>
<?php

$sql3="SELECT COUNT(Status) FROM tbl_orders WHERE Status='Pending'";

 if($result=mysqli_query($connect,$sql3))
	   {

		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {
				  $new=$row[0] ;

			  }
		   }
		  else
		   {

		   }

	   }
	   else
	   {
		  $msg ="<h3 style=color:#FFFF;>".mysqli_error($connect) ."</h3>";
		  echo $msg;
	   }

?>
<?php
$date = date('Y-m-d');
$sql3="SELECT COUNT(Status) FROM tbl_orders WHERE Ord_Rec_Date='$date;'";

 if($result=mysqli_query($connect,$sql3))
	   {

		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {
				  $Sale=$row[0] ;

			  }
		   }
		  else
		   {

		   }

	   }
	   else
	   {
		  $msg ="<h3 style=color:#FFFF;>".mysqli_error($connect) ."</h3>";
		  echo $msg;
	   }

?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Dashboard</h2>
    </div>
    <div class="container-fluid">
        <div class="row cm-fix-height">


        </div>

        <div class="row">
 <div class="col-md-1"></div>
  <div class="col-md-10"> <!-- Center -->
   <div id="wrapper">
               <div class="row">
                   <div class="col-lg-3 col-md-6">
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <div class="row">
                                   <div class="col-xs-3">
                                     <span class="svg-48">
                                <img src="assets/img/sf/handshake.svg" alt="handshake">
                                    </span>
                                   </div>
                                   <div class="col-xs-9 text-right">
                                       <div><h2><?php echo $Sale; ?></h2></div>
                                       <div>Daily Sales </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                    <div class="col-lg-3 col-md-6">
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <div class="row">
                                   <div class="col-xs-3">
                                     <span class="svg-48">
                                <img src="assets/img/sf/box-in.svg" alt="box-in">
                                    </span>
                                   </div>
                                   <div class="col-xs-9 text-right">
                                       <div><h2><?php echo $new ?></h2></div>
                                       <div>New Orders</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6">
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <div class="row">
                                   <div class="col-xs-3">
                                     <span class="svg-48">
                                <img src="assets/img/sf/mixer.svg" alt="mixer">
                                    </span>
                                   </div>
                                   <div class="col-xs-9 text-right">
                                       <div><h2><?php echo $id; ?></h2></div>
                                       <div>Ongoing Projects</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6">
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <div class="row">
                                   <div class="col-xs-3">
                                     <span class="svg-48">
                                <img src="assets/img/sf/globe.svg" alt="globe">
                                    </span>
                                   </div>
                                   <div class="col-xs-9 text-right">
                                       <div><h2><?php echo $active; ?></h2></div>
                                       <div>Live Services</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="row">
                   <div class="col-lg-4">
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h3 class="panel-title">  <img src="assets/img/sf/folder.svg" alt="folder"> Ongoing Projects</h3>
                           </div>
                           <div class="panel-body">
                             <?php


$tbsql879="SELECT * FROM tbl_orders where Status = 'Progressing'";

$records =mysqli_query($connect,$tbsql879);
while($package=mysqli_fetch_assoc($records))
{
echo "<div class='panel panel-primary'>";
echo "<div class='panel-body'>";
echo "<h4 align='center'><b>#N".$package["OrderID"]."&nbsp-&nbsp".$package["CustName"]."</b></h4>";
echo "<p><b>Assigned Engineer :&nbsp</b>".$package["ProjectEngineer"]."</p>";
echo "<p><b>ETA :&nbsp</b>".$package["ETA"]."</p>";
echo "</div>";
echo "</div>";
} // end While loop

?>
                              <div class="list-group">



               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-8">
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h3 class="panel-title"><img src="assets/img/sf/layers.svg" alt="layers"> Pending Orders</h3>
                           </div>
                           <div class="panel-body">
                               <div class="table-responsive">
                                   <table class="table table-bordered table-hover table-striped">
                                       <thead>
                                           <tr>
                                               <th>Order Reference</th>
                                               <th>Customer Name</th>
                                               <th>Order Type</th>
                                               <th>Plan Name</th>
                                               <th>Account Manager</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                          <?php
   $val = $_SESSION ['user'];

   $tbsql="SELECT * FROM tbl_orders where Status = 'Pending'";

   $records =mysqli_query($connect,$tbsql);
     while($package=mysqli_fetch_assoc($records))
       {
     echo "<tr>";
     echo "<td>".$package["OrderID"]."</td>";
     echo "<td>".$package["CustName"]."</td>";
     echo "<td>".$package["OrdType"]."</td>";
     echo "<td>".$package["HostingPlan"]."</td>";
     echo "<td>".$package["Createdby"]."</td>";
     echo "</tr>";

       } // end While loop

   ?>
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- /.row -->

         <div class="row">
      <!--      <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">  <img src="assets/img/sf/bullhorn.svg" alt="bullhorn"> Current Outages</h3>
                    </div>
                    <div class="panel-body">
                      <?php


//$tbsql879="SELECT * FROM tbl_orders where Status = 'Progressing'";

//$records =mysqli_query($connect,$tbsql879);
//while($package=mysqli_fetch_assoc($records))
{
//echo "<div class='panel panel-primary'>";
//echo "<div class='panel-body'>";
//echo "<h4 align='center'><b>#N".$package["OrderID"]."&nbsp-&nbsp".$package["CustName"]."</b></h4>";
//echo "<p><b>Assigned Engineer :&nbsp</b>".$package["ProjectEngineer"]."</p>";
//echo "<p><b>ETA :&nbsp</b>".$package["ETA"]."</p>";
//echo "</div>";
//echo "</div>";
} // end While loop

?>
                       <div class="list-group">



        </div>
                    </div>
                </div>
            </div> -->

          </div>

           </div>
           <!-- /.container-fluid -->

       </div>
       <!-- /#page-wrapper -->

   </div>
   <!-- /#wrapper -->

   </div>
   <!-- /#Center  -->

     <div class="col-md-1"></div>
</div>






        </div>
    </div>
