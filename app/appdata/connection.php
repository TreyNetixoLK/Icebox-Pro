<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "netixolk_razor";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try
{
	$connect = mysqli_connect($host,$user,$password,$database);

}

catch (Exception $ex)
{
	echo 'Error';
}
?>
