<?php 

include 'configs/db.php';
include 'nastroyki.php';

/*
Запомни ---- ПИШИ КОД ВНИМАТЕЛЬНО-----
на логику чтоб написать этот код потратил 20 минут
 
 на поиск ошибки  почему код не работает 20 часов
*/

if(isset($_GET["user_id"])) { //если есть гет запрос user в поисковой строке

	$sql = "DELETE FROM friends WHERE /* удалить поля в массиве друзья БД если юзер1= ... а юзер2=...*/

	user_1='" . $polzovatel_id . "' AND user_2='" . $_GET["user_id"] . ";'";

	 // var_dump($polzovatel_id);

		 if(mysqli_query($connect, $sql)) { 

			include "modules/friend_list.php";
			} else {
			echo "<h2>ошибка <h2/>";
		}
}

 ?>