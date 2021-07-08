<?php
if(isset($_GET['category_id'])){ // getting the record of selected id 
	$categories_all_record=$menu_categories->find('id',$_GET['category_id']); // finding the one specific record which has been 
	$categories_record=$categories_all_record->fetch();
	$crieteria=[
		'categories_record'=>$categories_record // diplaing the reocrd that ahs nbeen aadded int the database
		];
}
else{
	$crieteria=[];
}

if(isset($_GET['delete_category_id'])){	// check if the button which named delete_admin_id is pressed 
	if($menu_categories->delete('id',$_GET['delete_category_id'])) // to delete the selected id record from the table which has been created from new database table
	
		header('Location:https://v.je/admin/index.php?page=categories'); // when the code is executed successfully 

}
if(isset($_POST['AddCategory'])) // if addAdmi Staff is pressed or not
{

	if($_POST['name'] == "" ) echo '
				<script>
				alert("Category Is not Saved");
				document.location = "https://v.je/admin/index.php?page=categories";
				</script>';  // checking id password and user name is missing or not
		
else{
		$inserting_record=[
			'id'=>$_POST['id'],  // to insert the selected id into the database where the id column has been made
			'name'=>$_POST['name']  // to insert the selected role into the database where the username column has been made
		];
		$validate = $menu_categories->save($inserting_record,'id'); // to save the the added record in the database table named admins_staff
		if($validate == true){ // if all the coondtions are true then it will inseted with an alert message
			echo '
				<script>
				alert("A New Categories has been Added");
				document.location = "https://v.je/admin/index.php?page=categories";
				</script>';
		}else{
			echo '
				<script>
				alert("Error");
				</script>';
		}
	}
}



$title='Add And Edit Categories'; // to set the title for the page
$content=loadTemplate("../../view/admin/addeditcat_view.php", $crieteria); // to load the content into the layout (html)
?>