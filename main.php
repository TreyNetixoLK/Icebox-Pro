<?php include("app/appdata/logval.php"); ?>
<?php
	if ($_SESSION ['user'] == "")
	{
		header("Location:login.php");
	}
?>
<?php include "app/structure/head.php" ?>
<?php include "app/structure/navigator.php" ?>
<?php include "app/structure/page.php" ?>
<?php include "app/structure/footer.php" ?>
