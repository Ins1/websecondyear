<sction class="right">
	
	<h2>List Of Booking</h2>

	<table class="tables">
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Email</th>
			<th>No of Guests</th>
			<th>Date Time</th>
			<th>Action</th>
			<th>Reviewer</th>
		</tr>
			<?php
				$sn=1;
				foreach ($booking_record as $row) {
						if($row['completed']==0)
							//shows checked if the admin has marked it completed
				$complete = '<a href="https://v.je/admin/index.php?page=reservation&booking_id='.$row['id'].'">Complete</a>'; 	else{$complete='Checked';} 
						
				echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['email'].'</td>'.'<td>'.$row['noofguests'].'</td><td>'.$row['datetime'].'</td>'.'<td>'.$complete;?>
						<a onclick= "return confirm('Are you sure to delete?');" href="https://v.je/admin/index.php?page=reservation&delete_booking_id=<?php echo $row['id']; ?>">DELETE</a>
					</td><td> <?php echo $row['admin']; ?></td>
					<?php $sn++; ?>
			<?php } ?>
	</table>
		</section>
