	<sction class="right">
		
	<h2>List Of All Dishes</h2>
	<h3><a href="https://v.je/admin/index.php?page=addeditDishes">Add New Dishes</a></h3>
	<table class="tables">
	
			
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Details</th>
			<th>Price</th>
			<th>Display</th>
			<th>Action</th>
		</tr>
	
		
			<?php
				$sn=1;
				foreach ($fetching_all_dishes as $row) {
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['description'].
					'</td><td>'.$row['price'].'</td><td>'; if($row['display']==1) echo'Show';else echo "Hide";?></td>
					<td style="padding: 0;"><a href="https://v.je/admin/index.php?page=addEditDishes&dish_id=<?php echo $row['id'];?>">Edit</a>
					 <a onclick= "return confirm('Are you sure to delete?');" href="https://v.je/admin/index.php?page=addEditDishes&delete_dish_id=<?php echo $row['id']; ?>">Delete</a></td></tr>
						<?php $sn++; ?>
			 <?php }
		?>
	</table>
		</section>
