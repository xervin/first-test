<?php
session_start();
require_once("const.php"); 
session_unset();
header("location: ".INDEX);
?>