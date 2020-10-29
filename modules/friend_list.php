<?php 

$sql = "SELECT * FROM polzovateli WHERE id!=" . $polzovatel_id ;
$result = mysqli_query($connect, $sql);
$col_polzovateley = mysqli_num_rows($result);

    $i = 0;  //счетчик для подсчета количества пользователей	
     while($i < $col_polzovateley) {   //цикл для списка пользователей

     	$polzovatel = mysqli_fetch_assoc($result);
  ?>	
     	<li>
        	<div class="users">
				<img src="images/user.png"> 
			</div>
			<h3> <?php echo $polzovatel["name"]; ?> </h3>
<?php  /* запрос из БД выбрать все поля из таблицы friands где user1= переменной polzovatel['id'] и user2= переменной polzovatel_id или ... */
		$sql = "SELECT * FROM friends WHERE 

			user_1=" . $polzovatel["id"] . " AND user_2=" . $polzovatel_id . " 

			OR user_1=" . $polzovatel_id . " AND user_2=" . $polzovatel["id"];

			$friendsResult = mysqli_query($connect, $sql);
			$col_friends = mysqli_num_rows($friendsResult);
				// проверить если кол. друзей > 0 то добавить кнопку удаления friend
				if ($col_friends > 0) { 
	?>
				
					 <div data-ssylka="http://chat.local/del_friend.php?user_id=<?php 
                 	echo $polzovatel["id"]; ?>" onclick="add(this)">Удалить из друзей -</div>
	<?php
				} else {
					//иначе добавить кнопку добавить в друзья
	?>				
                 <div data-ssylka="http://chat.local/add_friend.php?user_id=<?php 
                 	echo $polzovatel["id"]; ?>" onclick="add(this)">В друзья +</div>
<?php			
				}
?>
     	</li>    	
<?php  
 		$i = $i + 1 ;  //увеличиваем счетчик
     }
 ?>
