<?php
$categories_all_record_menu=$menu_categories->findAll(); // finding all the record from the table
	$categories_name=$categories_all_record_menu->fetchAll();
if(isset($_GET['dish_id'])){ // getting the record of selected id 
	$dish_all_record=$added_dish->find('id',$_GET['dish_id']); // finding the one specific record which has been 
	$dishes_record=$dish_all_record->fetch();
	
	$crieteria=[
		'dishes_record'=>$dishes_record, // diplaing the reocrd that ahs nbeen aadded int the database
		'categories_name'=>$categories_name // diplaing the reocrd that ahs nbeen aadded int the database
		];
}
else{
	$crieteria=['categories_name'=>$categories_name]; // diplaing the reocrd that ahs nbeen aadded int the database
}

if(isset($_GET['delete_dish_id'])){  // check if the button which named delete_admin_id is pressed
	if($added_dish->delete('id',$_GET['delete_dish_id']))  // to delete the selected id record from the table which has been created from new database table
	{
		echo '<script>
				alert("A Dish record has been Deleted");
				document.location = "https://v.je/admin/index.php?page=dishes";
				</script>';
	}
}
if(isset($_POST['AddDish']))  // if addAdmi Staff is pressed or not
{
		if($_POST['name'] == "" || $_POST['description'] == "" ||$_POST['price']=="") echo "<script>alert('Either name description or price is missing')</script>";  // checking id password and user name is missing or not
		else
		{

			$inserting_record=[
				'id'=>$_POST['id'], // to insert the selected id into the database where the id column has been made
				'name'=>$_POST['name'],  // to insert the selected role into the database where the username column has been made
				'description'=>$_POST['description'],  // to insert the selected role into the database where the username column has been made
				'price'=>$_POST['price'], // to insert the selected role into the database where the username column has been made
				'display'=>$_POST['display'], // to insert the selected role into the database where the username column has been made
				'category_id'=>$_POST['category_id'] // to insert the selected role into the database where the username column has been made
			];

			$validate = $added_dish->save($inserting_record,'id');  // to save the the added record in the database table named admins_staff

		if ($_FILES['special_img']['error'] == 0) {
			
			$fileName =$specials->imageUpload().'.jpg';
			move_uploaded_file($_FILES['special_img']['tmp_name'], '../images/Specialoffer/' . $fileName);
				}
			if($validate == true){ // if all the coondtions are true then it will inseted with an alert message
				echo '
					<script>
					alert("A New Dishses Has been Added");
					document.location = "https://v.je/admin/index.php?page=dishes";
					</script>';
			}else{
				echo '
					<script>
					alert("Error");
					</script>';
			}
		}
	}




$title='Add And Edit Dishes'; // to set the title for the page
$content=loadTemplate("../../view/admin/addEditDishes_view.php", $crieteria); // to load the content into the layout (html)
?>