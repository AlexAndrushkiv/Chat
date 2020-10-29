<?php 
/*
1. Дизайн/макап - готов
2. Сделать отправку формы - готов
3. Сделать обработку данных формы, проверить заполнили ли email, password - готов
4. Сделать проверку есть ли такой user в БД.
5. Если нет, то вывести ошибку. Иначе пункт 6
6. Авторизовать user
*/

include "configs/db.php";
								
if (
	isset($_POST["email"]) && isset($_POST["password"])
	&& $_POST["email"] != "" && $_POST["password"] != ""
) {

	$sql = " SELECT * FROM polzovateli WHERE email LIKE '" . $_POST["email"] ."' AND password LIKE '" . $_POST["password"] ."' ";
	$result = mysqli_query($connect,$sql);
	$col_polzovateley = mysqli_num_rows($result);

		if ($col_polzovateley == 1) {
			$polzovatel = mysqli_fetch_assoc($result);

			setcookie("polzovatel_id", $polzovatel["id"], time() + 60*60);

			header("Location: /");
		} else {
	echo "<h2>Логин или пароль введены не верно</h2>";
		} 
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="style/style_registr.css">
</head>
<body>
	<?php 
		include "chasti_saita.php"; 
	 ?> 
	<div class="modal-sing" id="sing-modal"> <!-- 
		<div class="close-sing"><a href="avtoriz.php">X</a></div> -->
		<form action="login.php" method="POST">
			<p><h3>Email:</h3></p>
		   <input type="text" name="email" size="40">
		   <p><h3>Пароль:</h3></p>
		   <input type="password" name="password" size="40">
		  	<button id="button-color" type="submit">Войти</button>
 	   </form>
	    <a href="registr.php">Регистрация</a>
	</div>
</body>
</html>