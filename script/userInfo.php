<?php
require_once("connection.php"); 
$_SESSION['editUser'] = $_GET['editUser'];
$query = mysqli_query($connect, "SELECT * FROM users WHERE login='{$_GET['editUser']}'");
$user = mysqli_fetch_array($query);
$sel=($user['role']=='admin')?'user':'admin';
$userInformation = "<tr>
					<form method='POST' id='editUser' action='script/edit.php'>
					<td><input name='u_name' size='40' type='text' value='".$user['name']."'></td>
					<td><input name='u_login' size='20' type='text' value='".$user['login']."'></td>
					<td><input name='u_email' size='30' type='email' value='".$user['email']."'></td>
					<td><select name='u_role'>
						<option selected value='".$user['role']."'>".$user['role']."</option>
						<option value='".$sel."'>".$sel."</option>
					</select></td>
					<td><input name='u_password' size='20' type='password' value='".$user['password']."'></td>
					<td><input name='u_dateCreated' size='20'  value='".$user['dateCreated']."'></td>
					<td><input type='submit' value='Редактировать'></td>
					</form>
					</tr> ";
echo $userInformation;					
?>