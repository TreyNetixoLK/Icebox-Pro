<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "netixolk_mant436";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try
{
	$btconnect = mysqli_connect($host,$user,$password,$database);

}

catch (Exception $ex)	
{
	echo 'Error';
}
?>
