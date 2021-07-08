<section class="right">
	<h2><?php if (isset($_GET['update_id'])) {
		echo 'Edit Offer';
	} else echo "Add Offer"; ?>
	</h2>

	<form method="POST" action="" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($_GET['update_id'])) echo $updates_record['id'] ;?>">
		<label>Title</label>
		<input type="text" name="name" value="<?php if(isset($_GET['update_id'])) echo $updates_record['name'] ;?>">

		<label>Details</label>
		<textarea name="description"><?php if(isset($_GET['update_id'])) echo $updates_record['description'] ;?></textarea>

		<label>Start</label>
		<input type="date" name="offer_starting" value="<?php if(isset($_GET['update_id'])) echo $updates_record['offer_starting'] ;?>">



		<label>End</label>
		<input type="date" name="offer_ending" value="<?php if(isset($_GET['update_id'])) echo $updates_record['offer_ending'] ;?>">

		<?php
		if (isset($_GET['update_id'])) {
			if (file_exists('../images/Specialoffer/' . $updates_record['id'] . '.jpg')) {
						echo '<img style="width: 200px; clear: both" src="../images/Specialoffer/' . $updates_record['id'] . '.jpg" />';
					}}
				?>
				<label>Image</label>
				<input type="file" name="special_img" /> <br> <br>

		<input type="submit" name="AddUpdates" value="Submit">
	</form>
</section>