<?php
	$booking_all_record_database= $boking_table->findAll(); // finding all the record from the table
	$booking_record= $booking_all_record_database->fetchAll(); 
	if (isset($_GET['booking_id']))  // getting the record of selected id 
	{
		$id=$_GET['booking_id']; //  to get the vooking id 
		$admin= $_SESSION['user'];
		$records=['id'=>$id, 'admin'=>$admin, 'completed'=>1];
		if($boking_table->update($records, 'id')) // finding the one specific record which has been 
		{

			echo '
				<script>
				alert("You have reserved an table");
				document.location = "https://v.je/admin/index.php?page=reservation";
				</script>';
		}

	}
	if (isset($_GET['delete_booking_id'])) { // check if the button which named delete_admin_id is pressed 
	
		if($boking_table->delete('id',$_GET['delete_booking_id']))  // to delete the selected id record from the table which has been created from new database table
	{
		echo '<script>
				alert("Deleted");
				document.location = "https://v.je/admin/index.php?page=reservation";
				</script>';
	}
	}

	$crieteria=[ 'booking_record'=>$booking_record]; // to ave all the record in one variale which will be loaded into the template
	$title= 'Booking'; // to set the title for the page

	$content=loadTemplate("../../view/admin/reservation_view.php",$crieteria);  // to load the content into the layout (html)
 ?>