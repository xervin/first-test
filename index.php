<?php 
session_start();

include("view/header.php");

if (empty($_SESSION['login'])) {
	include("view/login.php");
}
else {
	include("view/menu.php");
	if (isset($_GET['editUser']) ) {
		include("view/editor.php");
	} elseif (isset($_GET['createUser'])) {
		include("view/registration.php");
	} else {
		include("view/users.php");	
	}
	
}

include("view/footer.php"); 
?>

