
<section class="right">
	<h2>Add A New Dish</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($_GET['dish_id']))echo $dishes_record['id'];?>">
		<label>Select Category: </label>
		<select name="category_id" >
		<?php 
			foreach($categories_name as $row)
		echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		 ?>
		</select> 
		<label>Name: </label>
		<input type="text" name="name" value=" <?php if(isset($_GET['dish_id']))echo $dishes_record['name']; ?>"> 

		<label>Price: </label>
		<input type="text" name="price" value="<?php if(isset($_GET['dish_id']))echo $dishes_record['price']; ?>"> 

		<label>Description: </label>
		<textarea name="description"> <?php if(isset($_GET['dish_id']))echo $dishes_record['description']; ?></textarea>

		<label>Display: </label>
		<select name="display" value=" <?php if(isset($_GET['dish_id']))echo $dishes_record['display']; ?>"> 
			<option value="1">Show</option>
			<option value="0">Hide</option>
		</select>
<?php
		if (isset($_GET['dish_id'])) {
			if (file_exists('../images/Specialoffer/' . $dishes_record['id'] . '.jpg')) {
						echo '<img style="width: 200px; clear: both" src="../images/Specialoffer/' . $dishes_record['id'] . '.jpg" />';
					}}
				?>
		<label>Image: </label>
				<input type="file" name="special_img"/> <br> <br>

		<input type="submit" name="AddDish" value="SUBMIT">
	</form>
</section>