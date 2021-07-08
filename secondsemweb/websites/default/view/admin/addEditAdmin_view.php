<section class="right">
	<h5>Add An New Admin</h5>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php if(isset($_GET['admin_id']))echo $admin_all_record['id'];?>">

		<label>Username: </label>
		<input type="text" name="username" value="<?php if(isset($_GET['admin_id']))echo $admin_all_record['username']; ?>">

		<label>Password: </label>
		<input type="text" name="password" >

		<label>Type: </label>
		<select name="role"> value=" <?php if(isset($_GET['admin_id']))echo $admin_all_record['role']; ?>"> 
			<option value="super">Super</option> 
			<option value="regular">Regular</option>
		</select>
		<input type="submit" name="addAdminStaff">
	</form>
</section>

