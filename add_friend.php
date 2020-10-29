<?php include "configs/db.php"; ?>
<?php include "nastroyki.php"; ?>

<?php 
if (isset($_GET["user_id"])) {
	$sql = " INSERT INTO  friends (user_1, user_2) VALUES ('" . $polzovatel_id ."','" . $_GET["user_id"] ."') ";
	if (mysqli_query($connect, $sql)) {
		include "modules/friend_list.php";
	} else {
		echo "<h2>ошибка </h2>";
	}
}

 ?>
 

