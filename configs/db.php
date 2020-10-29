<?php 
	//соединение с phpMyAdmin
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "web-chat";
//подключение к БД web-chat
	$connect = mysqli_connect($server, $username, $password, $dbname);

	mysqli_set_charset($connect, 'utf8');

	// $sql = "SELECT * FROM polzovateli ";// запрос к таблице polzovateli на вывод данных

	// $result = mysqli_query($connect, $sql); //запрос к БД(обязательно 2 параметра)

	// 	$col_polzovatel = mysqli_num_rows($result);//получить колличество результатов 

	// 	$i = 0;
	// 	while ($i < $col_polzovatel) {
	// 		$polzovatel = mysqli_fetch_assoc($result); //— Извлекает результирующий ряд в виде ассоциативного массива
	// 		echo "<pre>";
	// 		var_dump($polzovatel);
	// 		$i = $i + 1;
	// 	}
 ?>