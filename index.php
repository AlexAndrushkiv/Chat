<?php include "configs/db.php"; ?>
<?php include "nastroyki.php"; ?>

<?php 
if ($polzovatel_id == null) {
	header("Location: /login.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="style/style_registr.css">

</head>
<body>
	
		<?php include "modules/kontakti.php" ?>

	<?php include "chasti_saita.php" ?>

<div id="content">
	<div id="users">
		
		<form action="index.php" method="GET" id="poisk">
			<input type="text" name="poisk-text">
			<button>
				<img src="images/icon-search.png">
			</button>
		</form>

	<?php 
		/******************
			Список пользователей
		******************/
			//include - подключить файл
		include "modules/spisok.php";
	 ?>
	</div>

	<div id="soobsheniya">
		<div id="spisok-soobsheniy">

	<?php
		/******************
		    Список сообщений
		*******************/
		include "modules/messages.php";  //подключил сообщения
	?>	
      </div>
<?php 

if (isset($_POST["text"]) && $_POST["text"] != "" ) {
$sql = "INSERT INTO messages (komu_polzovatel_id, ot_polzovatel_id, text ) VALUES ('" . $_POST["komu_polzovatel_id"] . "','" . $_POST["ot_polzovatel_id"] . "','" . $_POST["text"] . "')";
	mysqli_query($connect, $sql);
}

if (isset($_GET['user'])) {
	?>
		<form id="form" action="index.php" method="POST">
			<input type="hidden" name="komu_polzovatel_id" value=" <?php echo $_GET["user"] ?>">
			<input type="hidden" name="ot_polzovatel_id" value=" <?php echo $polzovatel_id ?>">
			<textarea name="text"></textarea>
			<button type="submit" id="otpravka_sms"><img src="images/send.png"></button>
		</form>
	<?php
	
}
 ?>

   </div>			
</div>

 <?php include "contacts.php";  ?>	

	<script src="js/script.js"></script>
</body>

</html>
