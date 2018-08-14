<?php
require_once("connection.php"); 
If (!empty($_POST['u_login']) && !empty($_POST['u_password'])) {
	$login=mysqli_real_escape_string($connect,$_POST['u_login']);
	$pass=mysqli_real_escape_string($connect,$_POST['u_password']);
	$query="SELECT role FROM users WHERE login='$login' AND password='$pass'";
	$result = mysqli_query($connect, $query);
	If (mysqli_num_rows($result)==1) {
		$_SESSION['login'] = $login;
		$_SESSION['role'] = mysqli_fetch_array($result)['role'];
		$_SESSION['logged_in'] = true;
		echo "reload index";
		//header("location: ".INDEX);
	}
	else {
		echo "Неправильный логин<br> и(или) пароль";
	}
}
else {
	echo "Поля остались не заполнены";
}
?>