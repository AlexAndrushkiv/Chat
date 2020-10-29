<ul>
	<?php 
	if(isset($_GET["user"])) {

		 $sql = "SELECT * FROM messages  " .
		 "	 WHERE (komu_polzovatel_id=" . $_GET["user"] . 
		 " AND ot_polzovatel_id=" . $polzovatel_id .") " . 
		 " OR (komu_polzovatel_id=". $polzovatel_id ." AND ot_polzovatel_id=" . $_GET["user"] .")";

 			$resultat = mysqli_query($connect, $sql);
 			$col_messages = mysqli_num_rows($resultat);

			$i = 0;
			while($i < $col_messages) {  // запускаем цикл для списка пользователей, пока в переменной i хранится значение меньше чем количество пользователей
				$messages = mysqli_fetch_assoc($resultat);
				?>
				<li>
			        <div class="users">
							<img src='<?php echo $polzovatel["photo"] ?>'>  
						</div>
						<?php 
						$sql = "SELECT name FROM polzovateli WHERE id=" . $messages["ot_polzovatel_id"] ;
						$result = mysqli_query($connect, $sql);
						$polzovatel = mysqli_fetch_assoc($result);
						?>
						<h2><?php echo $polzovatel["name"] ?></h2>
						<p><?php echo $messages["text"] ?></p>
						<div class="time"> <?php echo $messages["time"] ?></div>
		      	</li>
		        <?php  
		   	$i = $i + 1;
			} 
	} else {
		echo "<h2>Пользователь не выбран</h2>";
	}
	?>
</ul>

