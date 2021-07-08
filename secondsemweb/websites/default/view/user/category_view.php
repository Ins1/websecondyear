<main class="sidebar">
	<section class="left">
		<ul>
			<?php foreach ($categoryQuery as $cate) { ?>
				<li><a href="https://v.je/index.php?page=category&cate_id=<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>

	<section class="right">

		<h1><?php echo $cat_name['name']; ?></h1>

	<ul class="listing">
<?php
	
		foreach ($dishQuery as $dishes) {
			$categoryQuery=$menu_categories->find('id',$dishes['category_id']);
			
			$category = $categoryQuery->fetch();
		echo '<li>';

		if (file_exists('images/Specialoffer/' . $dishes['id'] . '.jpg')) {
			echo '<a href="images/Specialoffer/' . $dishes['id'] . '.jpg"><img src="images/Specialoffer/' . $dishes['id'] . '.jpg" /></a>';
		}

		echo '<div class="details">';
		echo '<h2>' . $dishes['name'] . '</h2>';
		echo '<h3>' . $category['name'] . '</h3>';
		echo '<h4>£' . $dishes['price'] . '</h4>';
		echo '<p>' . $dishes['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	}

	?>

</ul>

</section>

</main>