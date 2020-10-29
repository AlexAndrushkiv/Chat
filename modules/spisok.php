<?php  
// $sql = "SELECT * FROM polzovateli" ;
// $result = mysqli_query($connect, $sql); //выполнить sql запрос в базе данных
// $col_polzovateley = mysqli_num_rows($result); //получить колличество результатов
 ?> 
<div id="spisok">
	<ul>
	<?php   

	if(isset($_COOKIE["polzovatel_id"])) {
	$sql = "SELECT * FROM polzovateli WHERE id != " . $_COOKIE["polzovatel_id"] . "";

		$result = mysqli_query($connect, $sql);

		$col_polzovateley = mysqli_num_rows($result);

			$i = 0;
			while($i < $col_polzovateley) {  // запускаем цикл для списка пользователей, пока в переменной i хранится значение меньше чем количество пользователей
				$polzovatel = mysqli_fetch_assoc($result);
				?>
				  <li>
		        		<a href='/index.php?user=<?php echo $polzovatel["id"]; ?>'> 
					        	<div class="users">
									<img src='<?php echo $polzovatel["photo"]; ?>'>  
								</div>
								 <h2> <?php echo $polzovatel["name"]; ?> </h2>
								 <h2> <?php echo $polzovatel["email"]; ?> </h2>
								<!--  <p>HI</p> -->
								<div class="time">09:10</div>
						</a>
		        </li>
		        <?php
		        	$i = $i + 1;
	   	} 
		}
	?>
	</ul>
</div>











