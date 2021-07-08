<section class="right">
	<h2>Manage Offers</h2>
	<h4><a href="https://v.je/admin/index.php?page=addEditSpecials">Add New Offer</a></h4>
	<table class="tables">
		<?php $sn=1; ?>
		<tr>
			<th>SN</th>
			<th>Title</th>
			<th>Details</th>
			<th>Starting</th>
			<th>Ending</th>
			<th>Action</th>
		</tr>

		<tr>
			<?php foreach ($fetching_all_bookings as $row){ ?>
				<td><?php echo $sn; $sn++ ?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['description'];?></td>
				<td><?php echo $row['offer_starting'];?></td>
				<td><?php echo $row['offer_ending'];?></td>
				<td><a href="https://v.je/admin/index.php?page=addEditSpecials&update_id=<?php echo $row['id'];?>">EDIT</a> <a onclick= "return confirm('Are you sure to delete?');" href="https://v.je/admin/index.php?page=addEditSpecials&delete_update_id=<?php echo $row['id'];?>">DELETE</a></td></tr>
			<?php } ?>
		
	</table>

</section>