
<?php
if (isset($_POST['reserve_button'])) {
$inserting_record=[
			
			'name'=>$_POST['name'], // to insert the selected id into the database where the id column has been made
			'email'=>$_POST['email'], // to insert the selected id into the database where the id column has been made
			'noofguests'=>$_POST['noofguests'], // to insert the selected id into the database where the id column has been made // to insert the selected id into the database where the id column has been made
			'datetime'=>$_POST['datetime'], // to insert the selected id into the database where the id column has been made
		];

		$validate = $boking_table->insert($inserting_record); // to save the the added record in the database table named admins_staff
		if($validate == true){ // if all the coondtions are true then it will inseted with an alert message
			echo '
				<script>
				alert("A New Reservation has been applied.");
				document.location = "https://v.je/index.php?page=reservation";
				</script>';
		}else{
			echo '
				<script>
				alert("Error");
				</script>';
		}
}
 $title = "Reservation"; // to set the title for the page
 $content = loadTemplate("../view/user/reservation_view.php", []); // to load the content into the layout (html)
?>

		