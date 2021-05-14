<?php

$db_host="localhost";
$db_user="192410101015";
$db_pass="secret";
$db_name="uts192410101015";

$kon = ($GLOBALS["___mysqli_ston"] = mysqli_connect($db_host, $db_user, $db_pass)) or die("can not access database");
mysqli_select_db($kon, $db_name) or die("can not connect");

?>

