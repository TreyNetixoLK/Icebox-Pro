<?php include('app/appdata/connection.php')?>
<?php
$session = $_SESSION ['user'];
$sql="SELECT * FROM tbl_users WHERE Username='$session'";

 if($result=mysqli_query($connect,$sql))
	   {

		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {
				  $fullname=$row[1] ;
          $desg=$row[2];

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
