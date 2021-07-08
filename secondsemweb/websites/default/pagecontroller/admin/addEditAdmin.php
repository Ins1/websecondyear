<?php 
$admin_record= $admins_staffs->findAll(); // finding all the record from the table
$admin_all_record= $admin_record->fetchAll();

if(isset($_GET['admin_id'])){ // getting the record of selected id 
	$admin_id=$admins_staffs->find('id',$_GET['admin_id']); // finding the one specific record which has been 
	$admin_all_record=$admin_id->fetch(); 
	$crieteria=[
		'admin_all_record'=>$admin_all_record // diplaing the reocrd that ahs nbeen aadded int the database
		];
}

if(isset($_GET['delete_admin_id'])){ // check if the button which named delete_admin_id is pressed 
	$admins_staffs->delete('id',$_GET['delete_admin_id']); // to delete the selected id record from the table which has been created from new database table
	header('Location:https://v.je/admin/index.php?page=staff'); // when the code is executed successfully 
}


if (isset($_POST['addAdminStaff'])) { // if addAdmi Staff is pressed or not
		
		if($_POST['username'] == "" || $_POST['password'] == "") echo "<script>alert('You have missed the password text')</script>"; // checking id password and user name is missing or not
		else{
			$inserting_record = [
				'id' => $_POST['id'], // to insert the selected id into the database where the id column has been made
				'username' => $_POST['username'], // to insert the selected role into the database where the username column has been made
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT), // to insert the selected role into the database where the password column has been made
				'role'     => $_POST['role'] // to insert the selected role into the database where the role column has been made
			];

			$validate = $admins_staffs->save($inserting_record, 'id'); // to save the the added record in the database table named admins_staff
			if($validate == true){ // if all the coondtions are true then it will inseted with an alert message
				echo '<script>
					 alert("A New Staff has been added");
					 document.location="https://v.je/admin/index.php?page=staff";
					 </script>';
			}else{
				echo '<script>
					 alert("Error");
					 </script>';
			}
		}
}
$title='Add And Edit Staffs'; // to set the title for the page
$crieteria=['admin_all_record'=>$admin_all_record]; // to ave all the record in one variale which will be loaded into the template
$content=loadTemplate("../../view/admin/addEditAdmin_view.php", $crieteria); // to load the content into the layout (html)

 ?>