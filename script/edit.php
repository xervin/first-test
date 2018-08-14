<?php
require_once("connection.php"); 
$sql = "UPDATE users 
	     SET 
		     name = '{$_POST['u_name']}',
		     login = '{$_POST['u_login']}',
		     email = '{$_POST['u_email']}',
		     role = '{$_POST['u_role']}',
		     password = '{$_POST['u_password']}',
		     dateCreated = '{$_POST['u_dateCreated']}'
	     WHERE login = '{$_SESSION['editUser']}'";
if (mysqli_query($connect, $sql)) {
    echo "Запись изменена";
} else {
    echo "Ошибка при обновлении записи: " . mysqli_error($connect);
}	     


?>