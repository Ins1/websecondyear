<?php
	$title='View and Manage Dishes'; // to set the title for the page

	$dish_all_record=$added_dish->findAll(); // finding all the record from the table
	$fetching_all_dishes=$dish_all_record->fetchAll();


	$crieteria=[
		'fetching_all_dishes'=>$fetching_all_dishes
	];  // to ave all the record in one variale which will be loaded into the template

	
	$content = loadTemplate("../../view/admin/dishes_view.php", $crieteria);  // to load the content into the layout (html)