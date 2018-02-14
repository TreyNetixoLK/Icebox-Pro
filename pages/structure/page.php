  <div style="width:100%;height:auto;">
 <?php
	if(isset($_GET['page'])){
	    include("pages/ui/".$_GET['page'].".php");
	}
	else{
		include("pages/ui/dashboard.php");
	}
 ?>
</div>