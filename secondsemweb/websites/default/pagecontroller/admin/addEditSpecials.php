<?php 
if(isset($_GET['update_id'])){ // getting the record of selected id 
	$updates_all_record_database=$specials->find('id',$_GET['update_id']); // finding the one specific record which has been 
	$updates_record=$updates_all_record_database->fetch();
	$crieteria=[
		'updates_record'=>$updates_record
		]; // diplaing the reocrd that ahs nbeen aadded int the database
}
else{
	$crieteria=[];
}

if (isset($_POST['AddUpdates'])) { // if addAdmi Staff is pressed or not
		
		if($_POST['name'] == "" || $_POST['description'] == "") echo "<script>alert('Either fill in name or add an description')</script>"; // checking id password and user name is missing or not

		else{
			$inserting_record = [
				'id' => $_POST['id'], // to insert the selected id into the database where the id column has been made
				'name' => $_POST['name'], // to insert the selected id into the database where the id column has been made
				'description' => $_POST['description'], // to insert the selected id into the database where the id column has been made
				'offer_starting' => $_POST['offer_starting'], // to insert the selected id into the database where the id column has been made
				'offer_ending'=> $_POST['offer_ending'] // to insert the selected id into the database where the id column has been made
			];

			$validate = $specials->save($inserting_record, 'id');

			if ($_FILES['special_img']['error'] == 0) {
			
			$fileName =$specials->imageUpload().'.jpg';
			move_uploaded_file($_FILES['special_img']['tmp_name'], '../images/Specialoffer/' . $fileName);
				}

			if($validate == true){ // if all the coondtions are true then it will inseted with an alert message
				echo '<script>
					 alert("A new update has been inserted");
					 document.location="https://v.je/admin/index.php?page=specials";
					 </script>';
			}else{
				echo '<script>
					 alert("Error");
					 </script>';
			}
		}
}

if (isset($_GET['delete_update_id'])) { // check if the button which named delete_admin_id is pressed 
	if($specials->delete('id',$_GET['delete_update_id']))
	{ // to delete the selected id record from the table which has been created from new database table
		echo '<script>
				alert("A update has been deleted");
				document.location = "https://v.je/admin/index.php?page=specials";
				</script>';
	}
}
$title='Add And Edit Updates'; // to set the title for the page

$content=loadTemplate("../../view/admin/addEditSpecials_view.php",$crieteria); // to load the content into the layout (html)
 ?>
