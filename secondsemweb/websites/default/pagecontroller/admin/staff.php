<?php 
	$title='View And Manage Staff';   // to set the title for the page
	$allStaff=$admins_staffs->findAll();  // finding all the record from the table
	$allStaff_list=$allStaff->fetchAll();

	$crieteria=[
		'allStaff_list'=>$allStaff_list
	]; // to ave all the record in one variale which will be loaded into the template
	$content = loadTemplate("../../view/admin/staff_view.php", $crieteria); // to load the content into the layout (html)
 ?>