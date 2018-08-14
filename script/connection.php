<?php
if (!isset($_SESSION)) session_start();
require_once("const.php");
$connect = mysqli_connect(DB_SERVER,DB_USER, DB_PASS,DB_NAME) or die(mysql_error());
?>