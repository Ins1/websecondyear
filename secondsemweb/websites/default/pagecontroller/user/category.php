 <?php


  $dishQuery=$added_dish->find('category_id',$_GET['cate_id']); // finding the one specific record which has been 
 	$categoryQuery=$menu_categories->findAll(); // finding all the record from the table

 	  $cat_name=$menu_categories->find('id',$_GET['cate_id']);  // finding the one specific record which has been 
 	  $cat_name=$cat_name->fetch();

	$vars = [
		'dishQuery'=>$dishQuery,  // to insert the selected id into the database where the id column has been made
		'menu_categories'=> $menu_categories, // to insert the selected id into the database where the id column has been made
		'categoryQuery'=> $categoryQuery, // to insert the selected id into the database where the id column has been made
		'cat_name'=>$cat_name  // to insert the selected id into the database where the id column has been made
	];
 $title = "All Dishes"; // to set the title for the page
 $content = loadTemplate("../view/user/category_view.php", $vars); // to load the content into the layout (html)
?>

		