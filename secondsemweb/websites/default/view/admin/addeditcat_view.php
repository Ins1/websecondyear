	
<section class="right">
	<h2>Add A New Category</h2>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php if(isset($_GET['category_id']))echo $categories_record['id'];?>"> 
		<label>Name: </label>
		<input type="text" name="name" value=" <?php if(isset($_GET['category_id']))echo $categories_record['name']; ?>"> 
		<input type="submit" name="AddCategory">
	</form>
</section>