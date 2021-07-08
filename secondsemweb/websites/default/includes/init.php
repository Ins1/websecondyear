<?php 
	require '../db/connect.php'; //to connect the database in localhost
	require '../classes/DatabaseTable.php'; //
	require '../functions/loadTemplate.php'; // 
	
	$added_dish = new DatabaseTable('menu'); // to create a connection of menu from database and store in added dish
	$menu_categories = new DatabaseTable('category');  // to create a connection of category from databasse and store in menu categories
	$admins_staffs= new DatabaseTable('admins');  // to create a connection of admins from databasse and store in admins staffs
	$boking_table= new DatabaseTable('resevation');  // to create a connection of reservation from databasse and store in booking table
	$specials= new DatabaseTable('special');   // to create a connection of special table from databasse and store in specials
	$reviews= new DatabaseTable('reviews');
?>