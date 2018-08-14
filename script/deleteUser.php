<?php
require_once("connection.php"); 
$sql = "DELETE FROM users WHERE login='{$_GET['deleteUser']}'";

if (mysqli_query($connect, $sql)) {
    header("location: ".INDEX);
} else {
    echo "Ошибка: " . mysqli_error($connect);
}
?>