	<section class="right">
	<h2>List Of Categories</h2>
	<h3><a href="https://v.je/admin/index.php?page=addeditcat">Add New Category</a></h3>

	<table class="tables">
		<thead>
			
		<tr>
			<th>SN</th>
			<th>Category Name</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
			
	
			<?php
				$sn=1;
				foreach ($fetching_all_categories as $row) {
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].' </td><td><a href="https://v.je/admin/index.php?page=addeditcat&category_id='.$row['id']. '">Edit</a>';?>  <a onclick= "return confirm('Are you sure to delete?');" href="https://v.je/admin/index.php?page=addeditcat&delete_category_id=<?php echo $row['id']; ?>">Delete</a></td>
				<?php	$sn++; ?>
		<?php	}
		?>
			</tbody>
	</table>
		</section>
