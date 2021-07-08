<section class="right">
	<h2>List of Admins</h2>
	<h4><a  href="https://v.je/admin/index.php?page=addEditAdmin">Add A New Admin</a></h4>

	<table class="tables">
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Type</th>
			<th>Action</th>
		</tr>
			<?php
				$sn=1;
				foreach ($allStaff_list as $row) {
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['username'].'</td><td>'.$row['role'].'</td>'.
					' <td><a href="https://v.je/admin/index.php?page=addEditAdmin&admin_id='.$row['id']. '">Edit</a>';
					if($row['role']=='regular') {?>
					<a onclick= "return confirm('Are you sure to delete?');" href="https://v.je/admin/index.php?page=addEditAdmin&delete_admin_id=<?php echo $row['id']; ?>">Delete</a></td>
					<?php $sn++; ?>
		<?php	}}
		?>
	</table>
</section>