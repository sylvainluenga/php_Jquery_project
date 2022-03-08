

<?php
session_start();
include"1.php";
include"cn.php";
include"functions.php";
$query=mysql_query("update marks set status='1' where fees >='5600'") or die(mysql_error());
message_goto("Results Now Published.",'dash.php');

?>
