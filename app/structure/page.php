<div style="width:100%;height:auto;">
<?php
if(isset($_GET['page'])){
    include("app/ui/".$_GET['page'].".php");
}
else{
  include("app/ui/dashboard.php");
}
?>
</div>
