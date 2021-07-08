<?php
 	$dishQuery=$added_dish->limitView(10);
 	$categoryQuery=$menu_categories->findAll(); // finding all the record from the table

	$vars = [
		'dishQuery'=>$dishQuery,  // to insert the selected role into the database where the role column has been made
		'added_dish'=>$added_dish, // to insert the selected role into the database where the role column has been made
		'menu_categories'=> $menu_categories,  // to insert the selected role into the database where the role column has been made
		'categoryQuery'=> $categoryQuery  // to insert the selected role into the database where the role column has been made
	];
 $title = "All Dishes"; // to set the title for the page
 $content = loadTemplate("../view/user/dishes_view.php", $vars); // to load the content into the layout (html)
?>


		