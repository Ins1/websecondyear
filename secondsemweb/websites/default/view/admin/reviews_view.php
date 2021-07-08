<sction class="right">
	
	<h2>List Of Reviews</h2>

	<table class="tables">
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Email</th>
			<th>Review</th>
			<th>Action</th>
			<th>Reviewer</th>
		</tr>
			<?php
				$sn=1;
				foreach ($all_reviewslist as $row) {
						if($row['completed']==0)
				$complete = '<a href="https://v.je/admin/index.php?page=reviews&eid='.$row['r_id'].'">Complete</a>'; 	else{$complete='Checked';} 
						
				echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['email'].
					'</td><td>'.$row['rating'].'</td>'.'<td>'.$complete;?>
						<a onclick= "return confirm('Are you sure to delete?');" href="https://v.je/admin/index.php?page=reviews&deid=<?php echo $row['r_id']; ?>">DELETE</a>
					</td><td> <?php echo $row['admin']; ?></td>
					<?php $sn++; ?>
			<?php } ?>
	</table>
		</section>
