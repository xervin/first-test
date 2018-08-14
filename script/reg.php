<?php

	if(!empty($_POST['uname']) && !empty($_POST['ulogin']) && !empty($_POST['uemail']) && !empty($_POST['upass'])) {
		require_once("connection.php"); 
		
		$name=mysqli_real_escape_string($connect,$_POST['uname']);
		$login=mysqli_real_escape_string($connect,$_POST['ulogin']);
		$email=mysqli_real_escape_string($connect,$_POST['uemail']);
		$role=mysqli_real_escape_string($connect,$_POST['urole']);
		$pass=mysqli_real_escape_string($connect,$_POST['upass']);
		$query=mysqli_query($connect, "SELECT * FROM users WHERE login ='{$login}'");
		$numr=mysqli_num_rows($query);

		if ($numr==0)
		{
			$dt=date("Y.m.d");
			$sql_q = "INSERT INTO users
					  VALUES 
					  (
						  '$name',
						  '$login',
						  '$email',
						  '$role',
						  '$pass',
						  '$dt'
					  )";
			$res=mysqli_query($connect,$sql_q);
			if($res){
				echo "Пользователь успешно добавлен";
			}
			else {
				echo "Не удалось добавить информацию";
			}
		}
		else {
			echo "Этот логин занят. Попробуйте другой!";
		}
	}else {
  		echo "Все поля обязательны для заполнения!";
	}

?>