<?php

	$title='View And Manage Categories';  // to set the title for the page

	$every_registered_categories=$menu_categories->findAll(); // finding all the record from the table
	$fetching_all_categories=$every_registered_categories->fetchAll();

	$crieteria=[
		'fetching_all_categories'=>$fetching_all_categories // diplaing the reocrd that ahs nbeen aadded int the database
	];
	$content = loadTemplate("../../view/admin/categories_view.php", $crieteria);  // to load the content into the layout (html)


