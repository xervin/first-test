<?php
require_once("connection.php"); 
  // Текущая страница
if (isset($_GET['page'])){
  $page = $_GET['page'];
}else $page = 1;

$kol = 6;  //количество записей для вывода
$art = ($page * $kol) - $kol;



// Определяем все количество записей в таблице
$res = mysqli_query($connect, "SELECT COUNT(*) FROM users");
$row = mysqli_fetch_row( $res);
$total = $row[0]; // всего записей 
$counter=0; 


// Количество страниц для пагинации
$str_pag = ceil($total / $kol);

 //устанавливаем критерий для сортировки
if (isset($_GET['sort'])) {
	$filter=$_GET['sort'];
}
else {
	$filter='name';
}
$query = mysqli_query($connect, "SELECT name, login, dateCreated FROM users ORDER BY $filter LIMIT $art,$kol");
$array = mysqli_fetch_array($query);
do
{
	$edit=($_SESSION['role']=='admin')?"<td><a align='right' href=\"index.php?editUser=".$array['login']."\"'>редактировать</a> | <a align='right' href=\"script/deleteUser.php?deleteUser=".$array['login']."\"'>удалить</a></td>":"<td></td>";
	echo "<tr><td width='40%'>".$array['name']." ".$edit."</td><td>".
					$array['login']."</td><td> ".
					$array['dateCreated']."</td></tr>";
}
while($array = mysqli_fetch_array($query));

$paginationOut= "<tr'><td colspan='4' align='right'>";
          for ($i = 1; $i <= $str_pag; $i++){
              $paginationOut.= "<a href=index.php?page=".$i."&sort=".$filter."> ".$i." </a>";
          }     
$paginationOut.= "<t/d'></tr>";     
echo $paginationOut;          
?>