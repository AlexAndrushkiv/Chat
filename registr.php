<?php include "configs/db.php"; ?>

<?php 
if (
	isset($_POST["email"]) && isset($_POST["password"])
	&& $_POST["email"] != "" && $_POST["password"] != ""
) {
	$sql = "INSERT INTO polzovateli (email, password, name) VALUES ('" . $_POST["email"] . "', '". $_POST["password"] . "', '". $_POST["name"] . "')";
	mysqli_query($connect, $sql);
	 } 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/style_registr.css">
	<title>Регистрация</title>
</head>
<body>

	<?php include "chasti_saita.php" ?>

	<div class="modal-sing" id="sing-modal"> <!-- Окно входа в чат-->
		<!-- <div class="close-sing"><a href="avtoriz.php">X</a></div> -->
		<form action="registr.php" method="POST">
			<p><h3>Имя:</h3></p>
		   <input type="text" name="name" size="40">
			<p><h3>Логин:</h3></p>
		   <input type="text" name="email" size="40">
		   <p><h3>Пароль:</h3></p>
		   <input type="password" name="password" size="40">
		  	<button id="button-color" type="submit">Зарегистрироваться</button>
 	   </form>
 	   <!-- <a href="login.php">Вход</a> -->
	</div>
</body>
</html>
