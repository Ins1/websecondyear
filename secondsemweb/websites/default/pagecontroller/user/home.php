		<?php
	
	$updates = $specials->findAll(); // finding all the record from the table
	$crieteria=[
		'updates'=>$updates]; // diplaing the reocrd that ahs nbeen aadded int the database


		 $title = "Kate's Kitchen- Home"; // to set the title for the page
		$content = loadTemplate("../view/user/home.php",$crieteria)  // to load the content into the layout (html) ?>

		