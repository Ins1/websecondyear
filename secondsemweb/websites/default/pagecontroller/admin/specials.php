<?php 
$booking_all_record= $specials->findAll();  // finding all the record from the table
$fetching_all_bookings=$booking_all_record->fetchAll();
$title='View And Manage Updates'; // to set the title for the page
$crieteria=[
	'fetching_all_bookings'=>$fetching_all_bookings
]; // to ave all the record in one variale which will be loaded into the template
$content=loadTemplate("../../view/admin/specials_view.php",$crieteria);  // to load the content into the layout (html)
 ?>

